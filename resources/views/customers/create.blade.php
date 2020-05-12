@extends('layouts.adminlte')

@section('contents')

        <div class="add_customer">
            <h4 class="text-center" >Add a customer</h4>
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
        <form method="post" action="{{ route('customers.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" id="image" class="form-control" @error('image') is-invalid @enderror onchange="validate()">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
                        </div>
                        <div class="form-group">
                            <strong>ID project:</strong>
                            <input type="text" name="projects_id" id="projects_id" class="form-control" placeholder="ID project" onchange="validate()" onkeypress="validate()">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Add customer</button>
                <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
            </div>
        </form>

@endsection
