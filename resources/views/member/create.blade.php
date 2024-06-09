@extends('layouts.template')

@section('main')
    <div class="pagetitle">
        <h1>Add members</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-11">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Member Form</h5>

                        <!-- General Form Elements -->

                        <form action="{{ route('member.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">IC Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="icNum" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="address" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" required>
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
        <form action="{{ route('member.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div>
                <label for="icNum" class="mt-3">IC Number</label>
                <input type="text" name="icNum" class="form-control" required>
            </div>

            <div>
                <label for="phone" class="mt-3">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div>
                <label for="address" class="mt-3">Address</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>

            <div>
                <label for="email" class="mt-3">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div> --}}
