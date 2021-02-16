@extends('layouts.dashboard.app')
@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.materi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.materi.partials.form-control',['submit' => 'Tambah'])
                </form>
            </div>
        </div>
    </div>
    <!-- end Main Content -->
@endsection
@section('script')
    <script>
        CKEDITOR.replace('materi');

    </script>
@stop
