@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create User</h1>
        
        <div class="card mb-4">
            <div class="card-body">

                <form action="{{  route('ecommerce.user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_price" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Role</label>
                        <select class="form-select" aria-label="category" id="role" name="role">
                            <option selected disabled>-Choose Role-</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</main>
@endsection