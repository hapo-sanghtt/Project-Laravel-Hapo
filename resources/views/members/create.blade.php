@extends('layouts.adminlte')

@section('contents')

    <div class="add_member">
        <h4 class="text-center">Add a member</h4>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        </br>
    @endif
    <form method="post" action="{{ route('members.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" id="image" class="form-control"
                                   @error('image') is-invalid @enderror onchange="validate()">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" id="name" class="form-control" @error('name') is-invalid
                                   @enderror placeholder="Name" onchange="validate()">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            <select class="gender" name="gender">
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" id="email" class="form-control"
                                   @error('email') is-invalid @enderror value="{{ old('email') }}"
                                   placeholder="Email" onchange="validate()">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Phone number:</strong>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   @error('phone') is-invalid @enderror value="{{ old('phone') }}"
                                   placeholder="Phone number" onchange="validate()">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="address" id="address" class="form-control"
                                   @error('address') is-invalid @enderror value="{{ old('address') }}"
                                   placeholder="Address" onchange="validate()" onkeypress="validate()">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong for="password">Password</strong>
                            <input id="password" type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong for="password-confirm">Password Confirmation</strong>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" placeholder="Password confirmation" required
                                   autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <strong>Role:</strong>
                            <select class="role" name="role">
                                <option value="1">Admin</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('projects_id') ? ' has-error' : '' }}">
                            <strong>ID project:</strong>
                            <select class="projects_id" name="projects_id">
                                <option value="1">Project 01</option>
                                <option value="0">Project 02</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Add member</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>

@endsection
