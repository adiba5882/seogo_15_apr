@extends('admin.layouts.app')
@section('content')
<div class=" " style="margin-left: 270px;margin-top:100px">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Category list</h3>
                </div>
                <div class="card-body">
                    @if ($categories->count() > 0)
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td><a
                                        href="{{ route('category.status', $category) }}">{{ $category->status == 1 ? 'Deactive' : 'Active' }}</a>
                                </td>
                                <td>
                                    <a href="{{route('category.edit', $category)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('category.delete', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <h3 class="text-danger text-center">Categories not found</h3>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection