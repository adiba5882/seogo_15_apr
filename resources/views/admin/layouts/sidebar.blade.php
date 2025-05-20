<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-list"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category.list')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Category list</a></li>
                        <li><a href="{{route('category.create')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Category Create</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-blog"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blog.list')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Blog List</a></li>
                        <li><a href="{{route('blog.create')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Blog Create</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('comment')}}" class="">
                        <i class="fa fa-comments"></i>
                        <span>Comments</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="">
                        <i class="fas fa-id-badge"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li class="ms-4">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </li><br><br>
                <li class="ms-4">
                    <form action="{{ route('home') }}">
                        <button class="btn btn-primary" type="submit">Seogo</button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>