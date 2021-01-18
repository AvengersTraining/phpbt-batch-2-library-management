<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 d-flex">
            <img src="{{ asset('images/admin/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-link">{{ __('app.logout') }}</button>
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">{{ __('app.list_function') }}</li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>{{ __('app.manage_genre') }}</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.genres.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('genres.list_all') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.genres.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('genres.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>{{ __('app.manage_title') }}</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.book_titles.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('book_titles.list_all') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.book_titles.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('book_titles.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>{{ __('app.manage_book') }}</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.books.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{ __('manage_book.list') }}</p>
                        </a>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-head-side-mask"></i>
                        <p>{{ __('app.manage_user') }}</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('manage_user.list') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('manage_user.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>{{ __('app.manage_borrowing') }}</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.orders.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('manage_borrowing.history') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.orders.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('manage_borrowing.borrow') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
