@extends('layouts.template')
@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Volunteers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('volunteer.index') }}">Volunteer</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
    </div>
    @can('create-volunteers', App\Models\User::class)
        <a href="{{ route('volunteer.create') }}" class="btn btn-info">Add volunteers</a>
    @endcan

    <section class="section">
        <div class="row">
            <div class="col-l2">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">All volunteers</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            <?php
                            $i=1;
                            ?>
                            @foreach ($volunteers as $volunteer)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $volunteer->name }}</td>
                                    <td>{{ $volunteer->email }}</td>
                                </tr>
                                <?php
                                $i++;
                                ?>
                            @endforeach
                        </table>
                        {{ $volunteers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
