<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('volunteer.index',[
            'volunteers' => User::where('role', 'Volunteer')->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Gate::allows('create-volunteers', User::class))
        {
            return view ('volunteer.create');
        }
        else
        {
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Gate::allows('create-volunteers', User::class))
        {
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        return redirect (route('volunteer.index'));
        }
        else 
        {
            abort(403);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $volunteer)
    {
        //
    }
}
