@extends('layouts.adminlte')

@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">Project</h2>
                <div class="form-group">
                    <strong for="id">ID:</strong>
                    <p type="text" class="form-control">{{ $projects->id}}</p>
                </div>
                <div class="form-group">
                    <strong for="title">Title:</strong>
                    <p type="text" class="form-control">{{ $projects->title}}</p>
                </div>
                <div class="form-group">
                    <strong for="description">Description:</strong>
                    <p type="text" class="form-control">{{ $projects->description}}</p>
                </div>
                <div class="form-group">
                    <strong for="status">Status:</strong>
                    <p type="number" class="form-control">{{ $projects->status}}</p>
                </div>
                <div class="form-group">
                    <strong for="time_estime">Time estime:</strong>
                    <p type="text" class="form-control">{{ $projects->time_estime}}</p>
                </div>
                <div class="form-group">
                    <strong for="start_date">Start date:</strong>
                    <p type="text" class="form-control">{{ $projects->start_date}}</b></p>
                </div>
                <div class="form-group">
                    <strong for="members_id">ID member:</strong>
                    <p type="text" class="form-control">{{ $projects->members_id}}</p>
                </div>
                <div class="form-group">
                    <strong for="customers_id">ID customer:</strong>
                    <p type="text" class="form-control">{{ $projects->customers_id}}</p>
                </div>
                <td colspan="2" style="text-align: right "><a href="{{ route('projects.index') }}" class="btn btn-danger">OK</a>
            </div>
        </div>
    </div>

@endsection
