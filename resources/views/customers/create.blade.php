@extends('layouts.adminlte')

@section('contents')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h4 class="d-flex text-center" >Add a customer</h4>
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
            <form method="post" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Gender:</strong>
                    <select class="gender" name="gender">
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Phone number:</strong>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
                </div>
                <div class="form-group">
                    <strong>ID member:</strong>
                    <div class="col-md-6">
                        <input type="text" name="member_id" id="member_id" class="form-control" placeholder="ID member" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <div class="form-group">
                    <strong>ID project:</strong>
                    <div class="col-md-6">
                        <input type="text" name="project_id" id="project_id" class="form-control" placeholder="ID project" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add customer</button>
                <a href="{{ route('customers.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

@endsection
