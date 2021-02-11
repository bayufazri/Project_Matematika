@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-header">
                        Akun Saya
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" value="{{ auth()->user()->username }}" id="username" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection