@extends('layouts.template')

@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Book: {{ $book->title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Book</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </nav>
    </div>

    {{-- <div class="card mt-3">
        <div class="card-body">

            <h5 class="card-title">Title</h5>

            <form action="{{ route('loan.search') }}" method="GET" class=form-inline>
                @csrf
                <div class="input-group">
                    <input type="search" name="searchkey" class="form-control">
                    <button type="submit" class="btn btn-primary">Search</button>
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
                                <input type="date" name="returnDate" class="form-control">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success">Return</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            {{ $loans->links() }}
        </div>
    </div> --}}

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Book Details</h5>
            <table class="table table-striped">
                <tr>
                    <th>Book ID</th>
                    <td>{{$book->id}}</td>
                </tr>
                <tr>
                    <th>Book Title</th>
                    <td>{{$book->title}}</td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td>{{$book->publisher}}</td>
                </tr>
                <tr>
                    <th>Published Year</th>
                    <td>{{$book->year}}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{$book->author}}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{$book->category}}</td>
                </tr>
            </table>
        </div>
    @endsection
