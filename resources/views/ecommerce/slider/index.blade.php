@extends('ecommerce.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Roles</h1>
        <a class="btn btn-primary my-1" href="{{ route('ecommerce.slider.create') }}" role="button">Insert</a>
        <div class="card mb-4">
            
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ Str::limit($slider->caption) }}</td>
                            <td>
                                @if ($slider->image)
                                    <img src="{{ asset('storage/slider/'.$slider->image) }}" class="img-fluid" style="max-width: 100px; max-height:100px" alt="{{ $slider->image }}">
                                @else
                                    <small><em>Image not available</em></small>
                                @endif
                            </td>
                            <td>
                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                                    <a href="{{ route('ecommerce.slider.edit', $slider->id) }}" class="btn btn-sm btn-warning">Edit</a>
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