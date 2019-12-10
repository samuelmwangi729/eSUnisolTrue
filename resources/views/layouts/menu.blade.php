<li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="/home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
    </li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('accountants*') ? 'active' : '' }}">
        <a href="#collapseAccountant" data-toggle="collapse"><i class="fa fa-user"></i><span>Accountants</span></a>
        <div class="collapse" id="collapseAccountant" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Accountants </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Accountants </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Accountants </a>
                </li>
                </li>
            </ul>
        </div>
</li>

{{-- #sample dropdown menu --}}
<li class="{{ Request::is('accountants*') ? 'active' : '' }}">
        <a href="#collapseExample" data-toggle="collapse"><i class="fa fa-user"></i><span>Dropdown</span></a>
    <div class="collapse" id="collapseExample" style="background-color:white;padding-left:5px">
        <ul class="navbar-nav" style="color:black">
            <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:black" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:black" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:black" href="#">Home </a>
            </li>
        </ul>
    </div>
    </li>
<li class="{{ Request::is('classes*') ? 'active' : '' }}">
        <a href="#collapseClass" data-toggle="collapse"><i class="fa fa-university"></i><span>Classes</span></a>
        <div class="collapse" id="collapseClass" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Class </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Classes </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Classes </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('clubs*') ? 'active' : '' }}">
        <a href="#collapseClubs" data-toggle="collapse"><i class="fa fa-slideshare"></i><span>Clubs</span></a>
        <div class="collapse" id="collapseClubs" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Clubs </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Clubs </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Clubs </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" style="color:black" href="#"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Manage Membership </a>
                    </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('designations*') ? 'active' : '' }}">
        <a href="#collapseDesc" data-toggle="collapse"><i class="fa fa-university"></i><span>Designations</span></a>
        <div class="collapse" id="collapseDesc" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Designation </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Designation </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Designations </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('dorms*') ? 'active' : '' }}">
        <a href="#collapseDorm" data-toggle="collapse"><i class="fa fa-university"></i><span>Dorms</span></a>
        <div class="collapse" id="collapseDorm" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Dorm </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Dormitories </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Dormitories </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('exams*') ? 'active' : '' }}">
        <a href="#collapseExams" data-toggle="collapse"><i class="fa fa-book"></i><span>Exams</span></a>
        <div class="collapse" id="collapseExams" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Exam </a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Cats </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Exams </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Exams </a>
                </li>
                </li>
            </ul>
        </div>
</li>
<li class="{{ Request::is('results*') ? 'active' : '' }}">
        <a href="#collapseeR" data-toggle="collapse"><i class="fa fa-credit-card"></i><span>Exam Results</span></a>
        <div class="collapse" id="collapseeR" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Grading Rule </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Grading Rules </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Post Results </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Post Cats </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Cancel Results </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Manage Results </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Manage Cats Results </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Cats Results </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;View Exam Results </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Class Results </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Class Means </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;General Class Means </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Subject Marksheets </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;ResultSlips </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Progress Records </a>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('fees*') ? 'active' : '' }}">
        <a href="#collapseExams" data-toggle="collapse"><i class="fa fa-money"></i><span>Fees</span></a>
        <div class="collapse" id="collapseExams" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Set Fees </a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Cats </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Exams </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Exams </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('librarians*') ? 'active' : '' }}">
        <a href="#collapseLib" data-toggle="collapse"><i class="fa fa-users"></i><span>Librarians</span></a>
        <div class="collapse" id="collapseLib" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Librarian </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Librarians </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Librarians </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('miscs*') ? 'active' : '' }}">
        <a href="#collapseMisc" data-toggle="collapse"><i class="fa fa-usd"></i><span>Miscelaneous Amounts</span></a>
        <div class="collapse" id="collapseMisc" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Request Amount </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Amounts </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Miscelaneous Amount </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('notifications*') ? 'active' : '' }}">
    <a href="#collapseNot" data-toggle="collapse"><i class="fa fa-bell"></i><span>Notifications</span></a>
    <div class="collapse" id="collapseNot" style="background-color:white;padding-left:5px">
        <ul class="navbar-nav" style="color:black">
            <li class="nav-item active">
                <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Notifications </a>
            </li>
            </li>
        </ul>
    </div>
</li>

<li class="{{ Request::is('parents*') ? 'active' : '' }}">
        <a href="#collapsePar" data-toggle="collapse"><i class="fa fa-users"></i><span>Parents</span></a>
        <div class="collapse" id="collapsePar" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Parent </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Parents </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Parents </a>
                </li>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
        <a href="#collapsePay" data-toggle="collapse"><i class="fa fa-credit-card"></i><span>Payments</span></a>
        <div class="collapse" id="collapsePay" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Payment </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Payments </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Statements </a>
                </li>
                </li>
            </ul>
        </div>
</li>
<li class="{{ Request::is('students*') ? 'active' : '' }}">
        <a href="#collapseStudent" data-toggle="collapse"><i class="fa fa-student"></i><span>Students</span></a>
        <div class="collapse" id="collapseStudent" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="/students/create"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Add Student </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Students </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Promote Students </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Students </a>
                </li>
            </ul>
        </div>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
        <a href="#collapseTeacher" data-toggle="collapse"><i class="fa fa-user"></i><span>Teachers</span></a>
        <div class="collapse" id="collapseTeacher" style="background-color:white;padding-left:5px">
            <ul class="navbar-nav" style="color:black">
                <li class="nav-item active">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Payment </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-eye"></i>&nbsp;&nbsp;Manage Payments </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="#"><i class="fa fa-print"></i>&nbsp;&nbsp;Print Statements </a>
                </li>
                </li>
            </ul>
        </div>
</li>

