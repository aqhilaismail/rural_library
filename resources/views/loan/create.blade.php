@extends('layouts.template')

@section('main')
    <div class="pagetitle">
        <h1>Add loan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('loan.index') }}">Loan</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-11">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loan Form</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('loan.store') }}" method="POST">
                            @csrf
                            @method('post')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Book ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="book_id" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Member ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="member_id" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Borrowing Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="borrowingDate" required min="{{date('Y-m-d')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-info">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

{{-- <div class="px-3">
        <form action="{{ route('loan.store') }}" method="POST">
            @csrf
            <div>
                <label for="bookID">Book ID</label>
                <input type="text" name="book_id" class="form-control" required>
            </div>

            <div>
                <label for="memberID" class="mt-3">Member ID</label>
                <input type="text" name="member_id" class="form-control" required>
            </div>

            <div>
                <label for="borrowingDate" class="mt-3">Borrowing Date</label>
                <input type="date" name="borrowingDate" class="form-control" required>
            </div>

            <button type='submit'class="btn btn-primary mt-3">Submit</button>
        </form> --}}
