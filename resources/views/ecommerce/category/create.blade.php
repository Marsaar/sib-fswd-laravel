@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Category</h1>

        <a class="btn btn-primary" href="" role="button">Insert</a>
        
        <div class="card mb-4">
            <div class="card-body">

                <form action="{{  route('ecommerce.category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</main>
@endsection