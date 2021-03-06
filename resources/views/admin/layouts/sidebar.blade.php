<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/admincp/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AELS Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/admincp/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ $active == 'dashboard' ? 'menu-open': '' }}">
                    <a href="/admincp/dashboard" class="nav-link {{ $active == 'dashboard' ? 'active': '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if(auth()->user()->type == 1)
                    <li class="nav-item has-treeview {{ $active == 'admins' ? 'menu-open': '' }}">
                        <a href="#" class="nav-link {{ $active == 'admins' ? 'active': '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Admins
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admincp/admins" class="nav-link {{ $active == 'admins' ? 'active': '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admins</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admincp/admins/create"
                                   class="nav-link {{ $active == 'admins' ? 'active': '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Admin</p>
                                </a>
                            </li>
                        </ul>


                    </li>
                @endif
                <li class="nav-item has-treeview {{ $active == 'instructors' || $active == 'students' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ $active == 'instructors' ? 'active': '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(auth()->user()->type == 1)
                            <li class="nav-item">
                                <a href="/admincp/instructors"
                                   class="nav-link {{ $active == 'instructors' ? 'active': '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Instructors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admincp/instructors/create"
                                   class="nav-link {{ $active == 'instructors' ? 'active': '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Instructor</p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a href="/admincp/students" class="nav-link {{ $active == 'students' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admincp/students/create"
                               class="nav-link {{ $active == 'students' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Student</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ $active == 'levels' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ $active == 'levels' ? 'active': '' }}">
                        <i class="nav-icon fas fa-level-up-alt"></i>
                        <p>
                            Levels
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admincp/levels" class="nav-link {{ $active == 'levels' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Levels</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admincp/levels/create"
                               class="nav-link {{ $active == 'levels' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Level</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ $active == 'courses' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ $active == 'courses' ? 'active': '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Courses
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admincp/courses" class="nav-link {{ $active == 'courses' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Courses</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admincp/courses/create"
                               class="nav-link {{ $active == 'courses' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Course</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ $active == 'materials' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ $active == 'materials' ? 'active': '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Materials
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admincp/materials" class="nav-link {{ $active == 'materials' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Materials</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admincp/materials/create"
                               class="nav-link {{ $active == 'materials' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Material</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item has-treeview {{ $active == 'exams' || $active == 'questions' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ $active == 'exams' || $active == 'questions' ? 'active': '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Exams
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admincp/exams" class="nav-link {{ $active == 'exams' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exams</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admincp/exams/create"
                               class="nav-link {{ $active == 'exams' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Exam</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/admincp/questions" class="nav-link {{ $active == 'questions' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Questions</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/admincp/questions/create"
                               class="nav-link {{ $active == 'questions' ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Exam Question</p>
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

