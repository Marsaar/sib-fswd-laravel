@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>

        <a class="btn btn-primary mb-2" href="{{ route('ecommerce.category.create') }}" role="button">Insert</a>
        
        <div class="card mb-4">
            
            <div class="card-body">
                <table id="datatablesSimple" class="stripe">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category['name'] }}</td>
                            <td>
                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('category.destroy', $category->id) }}" method="POST">
                                    <a href="{{ route('ecommerce.category.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection