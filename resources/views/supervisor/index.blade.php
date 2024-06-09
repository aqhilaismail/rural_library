@extends('layouts.template')
@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Supervisors</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supervisor.index') }}">Supervisor</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-l2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All supervisors</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            <?php
                            $i=1;
                            ?>
                            @foreach ($supervisors as $supervisor)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $supervisor->name }}</td>
                                    <td>{{ $supervisor->email }}</td>
                                </tr>
                                <?php
                                $i++;
                                ?>
                            @endforeach
                        </table>
                        {{ $supervisors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
