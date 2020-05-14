@extends('layouts.adminlte')

@section('contents')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h4 class="d-flex text-center" >Add a task</h4>
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
            <form method="post" action="{{ route('tasks.store') }}">
                @csrf
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" onchange="validate()">
                </div>
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="number" name="status" id="status" class="form-control" placeholder="Status" onchange="validate()">
                </div>

                <div class="form-group">
                    <strong>ID member:</strong>
                    <div class="col-md-6">
                        <input type="text" name="members_id" id="members_id" class="form-control" placeholder="ID member" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <div class="form-group">
                    <strong>ID project:</strong>
                    <div class="col-md-6">
                        <input type="text" name="projects_id" id="projects_id" class="form-control" placeholder="ID project" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add task</button>
                <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

@endsection
