<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loan.index', [
            'loans' => Loan::whereNull('returnDate')->paginate(50),
            'records' => Loan::whereNotNull('returnDate')->paginate(50),
        ]);
    }

    public function search(Request $request)
    {
        $result = Loan::whereNull('returnDate')->whereAny(['book_id', 'member_icNum'], '=', "$request->searchkey")->paginate(25);
        $loans = Loan::whereNull('returnDate')->paginate(25);
        $records = Loan::whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(25);

        if ($result->count() <= 0) {
            $loans = collect();
            return view('loan.index', [
                'title' => 'No results found for ' . $request->searchkey,
                'loans' => $loans,
                'records' => $records
            ]);
        } else {
            return view('loan.index', [
                'title' => 'Showing results for ' . $request->searchkey,
                'loans' => $result,
                'records' => $records
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loan.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $member = Member::find($request->member_id);
        $book = Book::find($request->book_id);

        if ($book->available == "Yes") {
            Loan::create([
                'book_id' => $request->book_id,
                'member_id' => $member->id,
                'member_icNum' => $member->icNum,
                'borrowingDate' => Carbon::parse($request->borrowingDate)->format('d/m/Y')

            ]);

            $book->available = "No";
            $book->save();
        } else {
            abort(500);
            // return back()->withInput($request->input());
        }

        return redirect(route("loan.index"));

    }

    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        $loan->returnDate = Carbon::parse($request->returnDate)->format('d/m/Y');
        $loan->save();

        return redirect(route('loan.index'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
