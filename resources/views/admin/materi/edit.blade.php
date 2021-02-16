@extends('layouts.dashboard.app', ['title' => 'News'])
@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.materi.update', $materi->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    @include('admin.materi.partials.form-control')
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
