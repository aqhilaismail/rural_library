@extends('layouts.template')
@section('main')
    <div class="pagetitle">
        <h1>Add book</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Book</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-11">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Book Form</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('book.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Author</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="author" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Publisher</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="publisher" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Publish Year</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="year" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category" required>
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
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div>
                <label for="author" class="mt-3">Author</label>
                <input type="text" name="author" class="form-control" required>
            </div>

            <div>
                <label for="publisher" class="mt-3">Publisher</label>
                <input type="text" name="publisher" class="form-control" required>
            </div>

            <div>
                <label for="publisherYear" class="mt-3">Publisher Year</label>
                <input type="text" name="year" class="form-control" required>
            </div>

            <div>
                <label for=category" class="mt-3">Category</label>
                <input type="text" name="category" class="form-control" required>
            </div>

            <button type='submit' class="btn btn-primary mt-3">Submit</button>
        </form>
    </div> --}}
