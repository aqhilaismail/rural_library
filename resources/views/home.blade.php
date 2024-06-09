@extends('layouts.template')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3><b>Dashboard</b></h3>
                <div class="card col-md-12">
                    <div class="card-body mt-4">
                        <div class="card col-md-12">
                            <a href="{{ route('supervisor.index') }}" class="btn btn-primary btn-lg btn-block">
                                <i class="bi bi-person-badge-fill"></i><br>
                                Supervisor
                            </a>
                            
                        </div>

                        <div class="card col-md-12">
                            <a href="{{ route('volunteer.index') }}" class="btn btn-primary btn-lg btn-block">
                                <i class="bi bi-person-badge"></i><br>
                                Volunteer
                            </a>
                        </div>

                        <div class="card col-md-12">
                            <a href="{{ route('member.index') }}" class="btn btn-primary btn-lg btn-block">
                                <i class="bi bi-person"></i><br>
                                Member
                            </a>
                        </div>

                        <div class="card col-md-12">
                            <a href="{{ route('book.index') }}" class="btn btn-primary btn-lg btn-block">
                                <i class="bi bi-book"></i><br>
                                Book
                            </a>
                        </div>

                        <div class="card col-md-12">
                            <a href="{{ route('loan.index') }}" class="btn btn-primary btn-lg btn-block">
                                <i class="bi bi-journal-text"></i><br>
                                Loan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
