@extends('layouts.template')

@section('main')
    <div class="px-3">

        <div class="pagetitle">
            <h1 class="mb-3 font-weight-bold">Books</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Book</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </nav>
        </div>

        <a href="{{ route('book.create') }}" class="btn btn-info">Add Books</a>

        <section class="section">
            <div class="row">
                <div class="col-l2">
                    <div class="card mt-3">
                        <div class="card-body">

                            <h5 class="card-title">Borrowed books</h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Year</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                $i = 1;
                                ?>
                                @foreach ($borrowedBooks as $book)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td><a href="{{ route('book.show', $book) }}" class="btn btn-info">Show</a></td>
                                    </tr>
                                    <?php
                                    $i++;
                                    ?>
                                @endforeach
                            </table>
                            <!--{{ $borrowedBooks->links() }}-->
                        </div>
                    </div>


                    {{-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Find available book</h5> --}}

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Available books</h5>

                            <form action="{{ route('book.search') }}" method="GET" class=form-inline>
                                @csrf
                                <div class="input-group">
                                    <input type="search" name="searchkey" class="form-control">
                                    <button type="submit" class="btn btn-secondary">Search</button>
                                </div>
                            </form></br>

                            <table class="table table-striped">
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Year</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                $i = 1;
                                ?>
                                @foreach ($availableBooks as $book)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td><a href="{{ route('book.show', $book) }}" class="btn btn-info">Show</a></td>
                                    </tr>
                                    <?php
                                    $i++;
                                    ?>
                                @endforeach
                            </table>
                            {{ $availableBooks->links() }}
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
@endsection
