<li class="nav-item">
    <a href="{{ route('activities.index') }}"
       class="nav-link {{ Request::is('activities*') ? 'active' : '' }}">
        <p>activities</p>
    </a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
