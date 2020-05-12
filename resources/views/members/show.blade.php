@extends('layouts.adminlte')

@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
            <h2 class="text-center">Member</h2>
            <div class="form-group">
                <strong for="id">ID:</strong>
                <p type="text" class="form-control">{{ $members->id}}</p>
            </div>
            <div class="form-group">
                <strong for="name">Name:</strong>
                <p type="text" class="form-control">{{ $members->name}}</p>
            </div>
            <div class="form-group">
                <strong for="gender">Gender:</strong>
                <p type="text" class="form-control">{{ $members->gender}}</p>
            </div>
            <div class="form-group">
                <strong for="email">Email:</strong>
                <p type="text" class="form-control">{{ $members->email}}</p>
            </div>
            <div class="form-group">
                <strong for="phone">Phone:</strong>
                <p type="text" class="form-control">{{ $members->phone}}</p>
            </div>
            <div class="form-group">
                <strong for="address">Address:</strong>
                <p type="text" class="form-control">{{ $members->address}}</b></p>
            </div>
            <div class="form-group">
                <strong for="role">Role:</strong>
                <p type="text" class="form-control">{{ $members->role}}</p>
            </div>
            <div class="form-group">
                <strong for="projects_id">ID project:</strong>
                <p type="text" class="form-control">{{ $members->projects_id}}</p>
            </div>
            <td colspan="2" style="text-align: right "><a href="{{ route('members.index') }}" class="btn btn-danger">OK</a>
            </div>
        </div>
    </div>

@endsection
