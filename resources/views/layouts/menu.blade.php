<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('accountants*') ? 'active' : '' }}">
    <a href="{{ route('accountants.index') }}"><i class="fa fa-edit"></i><span>Accountants</span></a>
</li>

<li class="{{ Request::is('classes*') ? 'active' : '' }}">
    <a href="{{ route('classes.index') }}"><i class="fa fa-edit"></i><span>Classes</span></a>
</li>

<li class="{{ Request::is('clubs*') ? 'active' : '' }}">
    <a href="{{ route('clubs.index') }}"><i class="fa fa-edit"></i><span>Clubs</span></a>
</li>

<li class="{{ Request::is('designations*') ? 'active' : '' }}">
    <a href="{{ route('designations.index') }}"><i class="fa fa-edit"></i><span>Designations</span></a>
</li>

<li class="{{ Request::is('dorms*') ? 'active' : '' }}">
    <a href="{{ route('dorms.index') }}"><i class="fa fa-edit"></i><span>Dorms</span></a>
</li>

<li class="{{ Request::is('exams*') ? 'active' : '' }}">
    <a href="{{ route('exams.index') }}"><i class="fa fa-edit"></i><span>Exams</span></a>
</li>

<li class="{{ Request::is('fees*') ? 'active' : '' }}">
    <a href="{{ route('fees.index') }}"><i class="fa fa-edit"></i><span>Fees</span></a>
</li>

<li class="{{ Request::is('librarians*') ? 'active' : '' }}">
    <a href="{{ route('librarians.index') }}"><i class="fa fa-edit"></i><span>Librarians</span></a>
</li>

<li class="{{ Request::is('miscs*') ? 'active' : '' }}">
    <a href="{{ route('miscs.index') }}"><i class="fa fa-edit"></i><span>Miscs</span></a>
</li>

<li class="{{ Request::is('notifications*') ? 'active' : '' }}">
    <a href="{{ route('notifications.index') }}"><i class="fa fa-edit"></i><span>Notifications</span></a>
</li>

<li class="{{ Request::is('parents*') ? 'active' : '' }}">
    <a href="{{ route('parents.index') }}"><i class="fa fa-edit"></i><span>Parents</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('results*') ? 'active' : '' }}">
    <a href="{{ route('results.index') }}"><i class="fa fa-edit"></i><span>Results</span></a>
</li>

<li class="{{ Request::is('students*') ? 'active' : '' }}">
    <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-edit"></i><span>Teachers</span></a>
</li>

