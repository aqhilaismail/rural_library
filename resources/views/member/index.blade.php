@extends('layouts.template')
@section('main')
    <div class="pagetitle">
        <h1 class="mb-3 font-weight-bold">Members</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
    </div>

    <a href="{{ route('member.create') }}" class="btn btn-info">Add members</a>


    <section class="section">
        <div class="row">
            <div class="col-l2">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">All members</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>IC Number</th>
                                <th>Phone Number</th>
                                <th>Adress</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            ?>
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->icNum }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->address }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>
                                        <a href="{{ route('member.show', $member) }}" class="btn btn-info">
                                            Show</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                ?>
                            @endforeach
                        </table>
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
