@if (!auth('admin')->check() && !auth('kid')->check())
    <a href="#" class="nav-link">
        تسجيل دخول
        <i class="bx bx-chevron-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li class="nav-item">
            <a href="{{ route('admin.login') }}" class="nav-link">
                المسئول
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kid.login') }}" class="nav-link"> الطفل </a>
        </li>
    </ul>
@endif
@auth('admin')
    <a href="#" class="nav-link">
        {{ auth('admin')->user()->name }}
        <i class="bx bx-chevron-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                لوحة التحكم
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link"> خروج </a>
        </li>
    </ul>
@endauth

@auth('kid')
    <a href="#" class="nav-link">
        {{ auth('kid')->user()->name }}
        <i class="bx bx-chevron-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li class="nav-item">
            <a href="{{ route('kid.profile') }}" class="nav-link">
                البروفايل
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kid.logout') }}" class="nav-link"> خروج </a>
        </li>
    </ul>
@endauth
