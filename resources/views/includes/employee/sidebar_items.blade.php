<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-calendar-check-o"></i>
        <p>
            Attendance
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">2</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="{{ route('employee.attendance.create') }}"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Attendance for Today</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="{{ route('employee.attendance.index') }}"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>List of Attendances</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-product-hunt"></i>
        <p>
            Projects
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">2</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="pages/layout/top-nav.html"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Create Project</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="pages/layout/top-nav.html"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>List Projects</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-calendar-minus-o"></i>
        <p>
            Leaves
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">2</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
            href="{{ route('employee.leaves.create') }}"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Apply for a Leave</p>
            </a>
        </li>
        <li class="nav-item">
            <a
            href="{{ route('employee.leaves.index') }}"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>List of Leaves</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-address-card"></i>
        <p>
            Self
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">3</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="pages/layout/top-nav.html"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Generate Salary slip</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="pages/layout/top-nav.html"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Salary history</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="pages/layout/top-nav.html"
                class="nav-link"
            >
                <i class="far fa-circle nav-icon"></i>
                <p>Expense Claim</p>
            </a>
        </li>
    </ul>
</li>