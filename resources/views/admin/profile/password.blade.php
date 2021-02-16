@extends('layouts.dashboard.app',['title' => 'Edit Password'])
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('profile.updatepassword') }}" method="post">
                    @csrf
                    @method('PATCH')
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
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
