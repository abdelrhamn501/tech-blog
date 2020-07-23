<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">


            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li
                    class="nav-item has-treeview {{ Route::is('admin.categories.index') ||  Route::is('admin.categories.create')  ? 'menu-open' : ''  }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.categories.index') ||  Route::is('admin.categories.create')  ? 'active' : ''  }}">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}"
                                class="nav-link {{ Route::is('admin.categories.index') ? 'active' : ''  }}">
                                <i class="far fa fa-list-alt nav-icon"></i>
                                <p>List Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.create') }}"
                                class="nav-link {{ Route::is('admin.categories.create') ? 'active' : ''  }}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Create Category</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li
                    class="nav-item has-treeview {{ Route::is('admin.tags.index') ||  Route::is('admin.tags.create')  ? 'menu-open' : ''  }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.tags.index') ||  Route::is('admin.tags.create')  ? 'active' : ''  }}">
                        <i class="nav-icon fa fa-tag"></i>
                        <p>
                            Tags
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.tags.index') }}"
                                class="nav-link {{ Route::is('admin.tags.index') ? 'active' : ''  }}">
                                <i class="far fa fa-tag nav-icon"></i>
                                <p>List tags</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tags.create') }}"
                                class="nav-link {{ Route::is('admin.tags.create') ? 'active' : ''  }}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Create Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview {{ Route::is('admin.posts.index')   ? 'menu-open' : ''  }}">
                    <a href="#" class="nav-link {{ Route::is('admin.posts.index')  ? 'active' : ''  }}">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Posts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.posts.index') }}"
                                class="nav-link {{ Route::is('admin.posts.index') ? 'active' : ''  }}">
                                <i class="far fa fa-book nav-icon"></i>
                                <p>List Posts</p>
                            </a>
                        </li>

                    </ul>
                </li>




                <li
                    class="nav-item has-treeview {{ Route::is('admin.users.index') ||  Route::is('admin.users.create')  ? 'menu-open' : ''  }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.users.index') ||  Route::is('admin.users.create')  ? 'active' : ''  }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="nav-link {{ Route::is('admin.users.index') ? 'active' : ''  }}">
                                <i class="far fa fa-users nav-icon"></i>
                                <p>List users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.create') }}"
                                class="nav-link {{ Route::is('admin.users.create') ? 'active' : ''  }}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li
                    class="nav-item has-treeview {{ Route::is('admin.comments.index') ||  Route::is('admin.comments.create')  ? 'menu-open' : ''  }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.comments.index') ||  Route::is('admin.comments.create')  ? 'active' : ''  }}">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            Comments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.comments.index') }}"
                                class="nav-link {{ Route::is('admin.comments.index') ? 'active' : ''  }}">
                                <i class="far fa fa-comments nav-icon"></i>
                                <p>List comments</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li
                    class="nav-item has-treeview {{ Route::is('admin.pages.index') ||  Route::is('admin.pages.create')  ? 'menu-open' : ''  }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.pages.index') ||  Route::is('admin.pages.create')  ? 'active' : ''  }}">
                        <i class="fas fa-file-alt"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.index') }}"
                                class="nav-link {{ Route::is('admin.pages.index') ? 'active' : ''  }}">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>List pages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.create') }}"
                                class="nav-link {{ Route::is('admin.pages.create') ? 'active' : ''  }}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Create page</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Main Sidebar Container -->
