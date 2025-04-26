@extends('admin.layouts.app')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded bg-info-subtle text-info d-flex align-items-center justify-content-center">
                                                <span class="avatar-title">
                                                    <i class="mdi mdi-check-circle-outline fs-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted fw-medium mb-2">Total Contacts</p>
                                            <h4 class="mb-0">{{ $totalContacts }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded bg-warning-subtle text-warning d-flex align-items-center justify-content-center">
                                                <span class="avatar-title">
                                                    <i class="mdi mdi-timer-sand fs-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted fw-medium mb-2">Total Categories</p>
                                            <h4 class="mb-0"> {{$totalCategories}} </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded bg-danger-subtle text-danger d-flex align-items-center justify-content-center">
                                                <span class="">
                                                    <i class="mdi mdi-chart-line fs-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted fw-medium mb-2">Total Blogs</p>
                                            <h4 class="mb-0">{{$totalBlogs}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Projects</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Message</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>subject</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $loop->index+1 }}</th>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td><a
                                                href="{{ route('blog.contact.status', $contact) }}">{{ $contact->status == 1 ? 'Deactive' : 'Active' }}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('blog.contact.edit', $contact)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.contact.delete', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Clivax.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://codebucks.in/" target="_blank" class="text-muted">Codebucks</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection