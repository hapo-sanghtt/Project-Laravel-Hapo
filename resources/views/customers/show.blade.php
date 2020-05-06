@extends('layouts.adminlte')

@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">Customer</h2>
                <div class="form-group">
                    <strong for="id">ID:</strong>
                    <p type="text" class="form-control">{{ $customers->id}}</p>
                </div>
                <div class="form-group">
                    <strong for="name">Name:</strong>
                    <p type="text" class="form-control">{{ $customers->name}}</p>
                </div>
                <div class="form-group">
                    <strong for="gender">Gender:</strong>
                    <p type="text" class="form-control">{{ $customers->gender}}</p>
                </div>
                <div class="form-group">
                    <strong for="email">Email:</strong>
                    <p type="text" class="form-control">{{ $customers->email}}</p>
                </div>
                <div class="form-group">
                    <strong for="phone">Phone:</strong>
                    <p type="text" class="form-control">{{ $customers->phone}}</p>
                </div>
                <div class="form-group">
                    <strong for="address">Address:</strong>
                    <p type="text" class="form-control">{{ $customers->address}}</b></p>
                </div>
                <div class="form-group">
                    <strong for="project_id">ID project:</strong>
                    <p type="text" class="form-control">{{ $customers->member_id}}</p>
                </div>
                <div class="form-group">
                    <strong for="project_id">ID project:</strong>
                    <p type="text" class="form-control">{{ $customers->project_id}}</p>
                </div>
                <td colspan="2" style="text-align: right "><a href="{{ route('customers.index') }}" class="btn btn-danger">OK</a>
            </div>
        </div>
    </div>

@endsection
