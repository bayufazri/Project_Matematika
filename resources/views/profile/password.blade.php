@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('profile.updatepassword') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-header">
                        Ganti Password
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="old_password">Password Lama:</label>
                            <input type="password" name="old_password" id="old_password" class="form-control">
                        </div>
                        @error('old_password')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <div class="form-group">
                            <label for="password">Password Baru:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <div class="form-group">
                            <label for="password_confirmation">Ulangi Password Baru:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection