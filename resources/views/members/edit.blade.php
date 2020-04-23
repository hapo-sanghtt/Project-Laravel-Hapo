@extends('members.base')

@section('action-content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Update a member</h2>
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
                <form method="post" action="{{ route('members.update',$student->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" name="image" value="{{$member->image}}"/>
                    </div>
                    <div class="form-group">
                        <label for="full_name">Full name</label>
                        <input type="text" class="form-control" name="full_name" value="{{$member->full_name}}"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" value="{{$member->password}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <select class="gender" name="gender" value="{{$member->gender}}">
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$member->email}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Phone number:</strong>
                        <input type="text" class="form-control" name="phone" value="{{$member->phone}}" />
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$student->address}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Role:</strong>
                        <select for="role" value="{{$member->role}}">
                            <option>Admin</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="project_id">ID project</label>
                        <input type="text" class="form-control" name="project_id" value="{{$member->project_id}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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
