@extends('admin.layouts.app')
@section('content')
<div class="card" style="margin-left: 270px;margin-top:100px; margin-right:10px">
    <div class="card-body">
        <div class="table-responsive-md">
            @if ($blogs->count() > 0)
            <table class="table text-nowrap mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Short Descripting</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Category Id</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td class="align-middle">{{$loop->index+1}}</td>
                        <td class="align-middle">{{$blog->title}}</td>
                        <td class="align-middle">{{$blog->short_description}}</td>
                        <td class="align-middle">{{$blog->description}}</td>
                        <td class="align-middle">
                            <div class="avatar-group">
                                <div class="avatar avatar-circle">
                                    <img src="{{Storage::url($blog->photo)}}" alt="Avatar image" class="avatar-2xs">
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">{{ $blog->category->name ?? 'No Category'  }}</td>
                        <td class="align-middle">{{$blog->created_at}}</td>
                        <td class="align-middle">
                            <a href="{{ route('blog.status', $blog) }}">{{ $blog->status == 1 ? 'Deactive' : 'Active' }}</a>
                        </td>
                        <td class="align-middle">
                            <a href="{{route('blog.edit', $blog)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td class="align-middle">
                            <form action="{{ route('blog.delete', $blog) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
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
@endsection