<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('images/icons/logo_1.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Instructor</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">


        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('instructor.dashboard') }}" class="nav-link {{ Request::is('instructor') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li> 
        <li class="nav-header">TABLES</li>
        <li class="nav-item">
            <a href="{{ route('instructor.scenarios') }}" class="nav-link {{ Request::is('instructor/scenarios') == 'instructor/scenarios' ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Scenarios</p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('instructor.scenario_action') }}" class="nav-link {{ Request::is('instructor/scenario_action') == 'instructor/scenario_action' ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Scenario Action</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('instructor.exercises') }}" class="nav-link {{ Request::is('instructor/exercises') == 'instructor/exercises' ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Exercises</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('instructor.testingvmt') }}" class="nav-link {{ Request::is('instructor/testingvmt') == 'instructor/testingvmt' ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Testing VMT</p>
            </a>
        </li> --}}
        <li class="nav-header">REPORTS</li>
        {{-- <li class="nav-item">
            <a href="{{ route('instructor.practice_mode_reports') }}" class="nav-link {{ Request::is('instructor/practice_mode_reports') == 'instructor/practice_mode_reports' ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Practice Mode Reports</p>
            </a>
        </li> --}}
        {{-- <li class="nav-item">
            <a href="{{ route('instructor.multiplayerReports') }}" class="nav-link {{ Request::is('instructor/multiplayerReports') == 'instructor/multiplayerReports' ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Multiplayer Reports</p>
            </a>
        </li> --}}
        
        {{-- <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
                Calendar
                <span class="badge badge-info right">2</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
                Gallery
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
                Kanban Board
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Pages
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/faq.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
                Extras
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v1</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v2</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Legacy User Menu</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Language Menu</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pace</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blank Page</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="starter.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Starter Page</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
                Search
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
                </a>
            </li>
            </ul>
        </li> --}}
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>