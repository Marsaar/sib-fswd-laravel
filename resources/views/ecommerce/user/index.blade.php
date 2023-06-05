@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <a class="btn btn-primary mb-2" href="{{ route('ecommerce.user.create') }}" role="button">Insert</a>
        <div class="card mb-4">
           
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection