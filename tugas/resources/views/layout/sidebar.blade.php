<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebDes-Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ $active == 'home' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ $active == 'active' ? 'article' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Article
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/article" class="nav-link {{ $active == 'myarticle' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Articles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/article/create" class="nav-link {{ $active == 'createarticle' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Article</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/category" class="nav-link {{ $active == 'category' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-header">USER</li>
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ $active == 'user' ? 'active' : ''}}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            User
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>