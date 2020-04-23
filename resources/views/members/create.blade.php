@extends('members.base')

@section('action-content')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h4 class="display-3">Add a member</h4>
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
        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <form method="post" action="{{ route('members.store') }}">
                @csrf
                <div class="input-group">
                    <strong>Image</strong>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <strong>Full name:</strong>
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full_name" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Password" onchange="validate()">
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
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Phone number:</strong>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
                </div>
                <div class="form-group">
                    <strong>Role:</strong>
                    <select class="role" name="role">
                        <option>Admin</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">ID project</label>
                    <div class="col-md-6">
                        <input type="text" name="project_id" id="project_id" class="form-control" placeholder="ID project" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary-outline">Add member</button>
                <a href="{{ route('members.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

@endsection
