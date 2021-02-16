{{-- Sidebar --}}
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">mate&middot;matika</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.home') }}">MTK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{ route('admin.home') }}"
                    class="nav-link"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li
                class="nav-item dropdown {{ request()->is('admin/profile/myprofile') || request()->is('admin/profile/password') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                    <span>Profile Management</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/profile/myprofile') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.profile.myprofile') }}">Edit Profile</a></li>
                    <li class="{{ request()->is('admin/profile/password') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.profile.changepassword') }}">Edit Password</a></li>
                </ul>
            </li>

            <li
                class="nav-item dropdown {{ request()->is('admin/materi') || request()->is('admin/materi/create') || request()->is('admin/soal') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-pencil-ruler"></i>
                    <span>Materi & Soal</span></a>
                <ul class="dropdown-menu">
                    <li
                        class="{{ request()->is('admin/materi') || request()->is('admin/materi/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.materi.index') }}">Materi</a>
                    </li>
                    <li class="{{ request()->is('admin/soal') ? 'active' : '' }}">
                        <a class="nav-link" href="">Soal</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
