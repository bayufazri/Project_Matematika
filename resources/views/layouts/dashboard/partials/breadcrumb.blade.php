<div class="section-header">
    <h3>Menu</h3>
    <div class="section-header-breadcrumb">
        {{-- Dashboard --}}
        @if (request()->is('admin'))
            <div class="breadcrumb-item text-primary">
                <h5>Dashboard</h5>
            </div>
        @endif
        @if (request()->is('admin/profile/myprofile'))
            <div class="breadcrumb-item text-primary">
                <h5>Edit Profile</h5>
            </div>
        @endif
        @if (request()->is('admin/profile/password'))
            <div class="breadcrumb-item text-primary">
                <h5>Edit Password</h5>
            </div>
        @endif
        @if (request()->is('admin/materi'))
            <div class="breadcrumb-item text-primary">
                <h5>Materi</h5>
            </div>
        @endif
        @if (request()->is('admin/materi/create'))
            <div class="breadcrumb-item text-primary">
                <h5>Create Materi</h5>
            </div>
        @endif
        @if (request()->is('admin/materi/edit/{id}'))
            <div class="breadcrumb-item text-primary">
                <h5>Edit Materi</h5>
            </div>
        @endif
        @if (request()->is('admin/soal'))
            <div class="breadcrumb-item text-primary">
                <h5>Soal</h5>
            </div>
        @endif
        @if (request()->is('admin/soal/create'))
            <div class="breadcrumb-item text-primary">
                <h5>Create Soal</h5>
            </div>
        @endif
        @if (request()->is('admin/soal/edit'))
            <div class="breadcrumb-item text-primary">
                <h5>Edit Soal</h5>
            </div>
        @endif
    </div>
</div>
