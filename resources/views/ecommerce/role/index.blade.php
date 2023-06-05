@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Roles</h1>
        <a class="btn btn-primary my-1" href="{{ route('ecommerce.role.create') }}" role="button">Insert</a>
        <div class="card mb-4">
            
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $role['name'] }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</main>
@endsection