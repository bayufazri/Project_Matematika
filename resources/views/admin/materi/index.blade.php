@extends('layouts.dashboard.app',['title' => 'Materi'])
@section('content')
    <!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.materi.create') }}" class="btn btn-primary btn-lg"
                            style="margin-left: -10px; border-radius: 0;"><i class="fa fa-plus-square"></i> Add Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Materi</th>
                                    <th>Sub Materi</th>
                                    <th>Materi</th>
                                    <th>Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                                @forelse($materi as $m)
                                    <tr>
                                        <th>{{ $loop->iteration + $materi->firstItem() - 1 . '.' }}</th>
                                        <td>{{ $m->kode_materi }}</td>
                                        <td>{{ Str::limit($m->sub_materi, 50) }}</td>
                                        <td>{{ Str::limit($m->materi, 50) }}</td>
                                        <td><img src="{{ $m->takeImage }}" width="100px"></td>
                                        <td>
                                            <form action="{{ route('admin.materi.delete', $m->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mr-2 float-left" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Delete"
                                                    onclick="return confirm('are you sure?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{ route('admin.materi.edit', $m->id) }}"
                                                class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" style="color: red;" align="center">Data Empty!</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    {{ $materi->links() }}
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end Main Content -->
@endsection
@section('script')
<script>
    CKEDITOR.replace('materi');

</script>
@stop
