@extends('admin.layouts.app')

@section('content')
    <div class=" " style="margin-left: 270px;margin-top:100px; margin-right:10px">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header card-header-bordered">
                        <h3 class="card-title">Create Category</h3>
                    </div>
                    <div class="card-body">
 
                        <form class="row g-3" action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="col-md-6"><label for="inputEmail4" class="form-label">Name</label>

                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="inputEmail4" />

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12"><button type="submit" class="btn btn-primary">Save</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
