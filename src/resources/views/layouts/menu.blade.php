<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>หน้าหลัก</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('volunteer.index') }}" class="nav-link {{ (request()->is('covid*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>จัดการผู้สมัคร</p>
    </a>
</li>

