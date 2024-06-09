@extends('layouts.template')

@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Loans</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('loan.index') }}">Loan</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
    </div>

    <a href="{{ route('loan.create') }}" class="btn btn-info">Add loan records</a>

    <div class="card mt-3">
        <div class="card-body">

            <h5 class="card-title">Search book ID or Member IC</h5>

            <form action="{{ route('loan.search') }}" method="GET" class=form-inline>
                @csrf
                @method('get')
                <div class="input-group">
                    <input type="search" name="searchkey" class="form-control">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </div>
            </form>


            <h5 class="card-title">Active loans</h5>
            @if (!$loans->isEmpty())
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Book ID</th>
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th colspan="2">Return Date</th>
                </tr>
                <?php
                $i = 1;
                ?>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->borrowingDate }}</td>
                            <form action="{{ route('loan.update', $loan) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <td>
                                    <input type="date" name="returnDate" class="form-control"
                                        min="{{ date('Y-d-m', strtotime($loan->borrowingDate)) }}">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-info">Return</button>
                                </td>
                            </form>
                        </tr>
                        <?php
                        $i++;
                        ?>
                    @endforeach
                    </table>
                    {{ $loans->links() }}
                    @endif
            @if ($loans->isEmpty())
                <p class="text-danger text-bold">Record cannot be found.</p>
            @endif
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Inactive loans</h5>
            <table class="table table-striped">
                <tr>
                    <th>No.</th>
                    <th>Book ID</th>
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th>Return Date</th>
                </tr>
                <?php
                $i = 1;
                ?>
                @foreach ($records as $loan)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $loan->book->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->member->name }}</td>
                        <td>{{ $loan->member->icNum }}</td>
                        <td>{{ $loan->borrowingDate }}</td>
                        <td>{{ $loan->returnDate }}</td>
                    </tr>
                    <?php
                    $i++;
                    ?>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    @endsection
