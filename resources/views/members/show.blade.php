@extends('members.base')

@section('action-content')

    <div class="card">
        <div class="card-body">
            <h2>Member</h2>
            <div class="form-group">
                <label for="id">ID:</label>
                <p type="text" class="form-control">{{ $member->id}}</p>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <p type="text" class="form-control">{{ $member->image}}</p>
            </div>
            <div class="form-group">
                <label for="full_name">Full name:</label>
                <p type="text" class="form-control">{{ $member->full_name}}</p>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <p type="text" class="form-control">{{ $member->password}}</p>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <p type="text" class="form-control">{{ $member->gender}}</p>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <p type="text" class="form-control">{{ $student->email}}</p>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <p type="text" class="form-control">{{ $member->phone}}</p>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <p type="text" class="form-control">{{ $member->address}}</b></p>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <p type="text" class="form-control">{{ $member->role}}</p>
            </div>
            <div class="form-group">
                <label for="project_id">ID project:</label>
                <p type="text" class="form-control">{{ $member->project_id}}</p>
            </div>
            <td colspan="2" style="text-align: right "><a href="{{ route('members.index') }}" class="btn btn-danger">OK</a>
        </div>
    </div>

@endsection
