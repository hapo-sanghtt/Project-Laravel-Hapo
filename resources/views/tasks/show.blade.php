@extends('layouts.adminlte')

@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">Task</h2>
                <div class="form-group">
                    <strong for="id">ID:</strong>
                    <p type="text" class="form-control">{{ $tasks->id}}</p>
                </div>
                <div class="form-group">
                    <strong for="name">Name:</strong>
                    <p type="text" class="form-control">{{ $tasks->name}}</p>
                </div>
                <div class="form-group">
                    <strong for="description">Description:</strong>
                    <p type="text" class="form-control">{{ $tasks->description}}</p>
                </div>
                <div class="form-group">
                    <strong for="status">Status:</strong>
                    <p type="number" class="form-control">{{ $tasks->status}}</p>
                </div>
                <div class="form-group">
                    <strong for="members_id">ID member:</strong>
                    <p type="text" class="form-control">{{ $tasks->members_id}}</p>
                </div>
                <div class="form-group">
                    <strong for="projects_id">ID project:</strong>
                    <p type="text" class="form-control">{{ $tasks->projects_id}}</p>
                </div>
                <td colspan="2" style="text-align: right "><a href="{{ route('tasks.index') }}" class="btn btn-danger">OK</a>
            </div>
        </div>
    </div>

@endsection
