@extends('layouts.adminlte')

@section('contents')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h4 class="d-flex text-center" >Add a member</h4>
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
        <div class="col-xs-6 col-sm-6 col-md-6">
            <form method="post" action="{{ route('members.store') }}">
                @csrf
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" id="name" class="form-control" @error('name') is-invalid @enderror placeholder="Name" onchange="validate()">
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
                    <input type="text" name="email" id="email" class="form-control" @error('email') is-invalid @enderror value="{{ old('email') }}" placeholder="Email" onchange="validate()">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Phone number:</strong>
                    <input type="text" name="phone" id="phone" class="form-control" @error('phone') is-invalid @enderror value="{{ old('phone') }}" placeholder="Phone number" onchange="validate()">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" id="address" class="form-control" @error('address') is-invalid @enderror value="{{ old('address') }}" placeholder="Address" onchange="validate()" onkeypress="validate()">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong for="password">Password:</strong>
                    <input id="password" type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong for="password-confirm">{{ __('Confirm Password') }}</strong>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <strong>Role:</strong>
                    <select class="role" name="role">
                        <option value="1">Admin</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>ID project:</strong>
                    <select type="text" name="project_id" id="project_id" class="form-control" value="{{ old('project_id') }}" placeholder="ID project" onchange="validate()" onkeypress="validate()">
                        <option value="1">Project 1</option>
                        <option value="2">Project 2</option>
                    @error('project_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add member</button>
                <a href="{{ route('members.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

@endsection
