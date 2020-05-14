@extends('layouts.adminlte')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Update a customer</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                @endif
                <form method="post" action="{{ route('customers.update',$customers->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$customers->name}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <select class="gender" name="gender" value="{{$customers->gender}}">
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$customers->email}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="text" class="form-control" name="phone" value="{{$customers->phone}}" />
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$customers->address}}"/>
                    </div>
                    <div class="form-group">
                        <label for="project_id">ID project</label>
                        <input type="text" class="form-control" name="project_id" value="{{$customers->projects_id}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('customers.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
            <div class="col-sm-12">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
