@extends('layouts.template')

@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Member: {{ $member->name }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </nav>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            <h5 class="card-title">Search book ID</h5>

            <form action="{{ route('loan.search') }}" method="GET" class=form-inline>
                @csrf
                <div class="input-group">
                    <input type="search" name="searchkey" class="form-control">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </div>
            </form>


            <h5 class="card-title">Active loans</h5>
            <table class="table table-striped">
                <tr>
                    <th>Loan ID</th>
                    <th>Book ID</th>
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th colspan="2">Return Date</th>
                </tr>
                @foreach ($loans as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->book->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->member->icNum }}</td>
                        <td>{{ $loan->member->name }}</td>
                        <td>{{ $loan->borrowingDate }}</td>
                        <form action="{{ route('loan.update', $loan) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <td>
                                <input type="date" name="returnDate" class="form-control" min="{{date('Y-d-m', strtotime($loan->borrowingDate))}}">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Return</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            {{ $loans->links() }}
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Inactive loans</h5>
            <table class="table table-striped">
                <tr>
                    <th>Loan ID</th>
                    <th>Book ID</th>
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th>Return Date</th>
                </tr>
                @foreach ($records as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->book->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->member->name }}</td>
                        <td>{{ $loan->member->icNum }}</td>
                        <td>{{ $loan->borrowingDate }}</td>
                        <td>{{ $loan->returnDate }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    @endsection
