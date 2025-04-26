@extends('admin.layouts.app')
@section('content')
<div class="card" style="margin-left: 270px;margin-top:100px; margin-right:10px">
    <div class="card-header card-header-bordered">
        <h3 class="card-title">Blog Create</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Blog Title</label>
                <input type="text" name="title" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Enter blog title" required>
            </div>
            <!--Short_Description -->
            <div class="mb-3">
                <label class="form-label">Short Description</label>
                <textarea name="s_desc" class="form-control @error('name') is-invalid @enderror" rows="5" placeholder="Write something..." required></textarea>
            </div>
            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="desc" class="form-control @error('name') is-invalid @enderror" rows="5" placeholder="Write something..." required></textarea>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label class="form-label">Upload Photo</label>
                <input type="file" name="photo" class="form-control @error('name') is-invalid @enderror" required>
            </div>
            <!-- category id -->
            <div class="mb-3">
                <label class="form-label">Category Id</label>
                <select class="form-select" aria-label="Default select example" name="cate_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill shadow-sm">🚀 Publish Blog</button>
            </div>
        </form>
    </div>
</div>
@endsection