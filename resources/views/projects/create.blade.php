@extends('layouts.adminlte')

@section('contents')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h4 class="d-flex text-center" >Add a project</h4>
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
            <form method="post" action="{{ route('projects.store') }}">
                @csrf
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" onchange="validate()">
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
                    <strong>Time estime:</strong>
                    <input type="text" name="time_estime" id="time_estime" class="form-control" placeholder="Time estime" onchange="validate()" onkeypress="validate()">
                </div>
                <div class="form-group">
                    <strong>Start date:</strong>
                    <div class="col-md-6">
                        <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Start date" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <div class="form-group">
                    <strong>End date:</strong>
                    <div class="col-md-6">
                        <input type="date" name="end_date" id="end_date" class="form-control" placeholder="End date" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <div class="form-group">
                    <strong>ID member:</strong>
                    <div class="col-md-6">
                        <input type="text" name="member_id" id="member_id" class="form-control" placeholder="ID member" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <div class="form-group">
                    <strong>ID customer:</strong>
                    <div class="col-md-6">
                        <input type="text" name="customer_id" id="customer_id" class="form-control" placeholder="ID customer" onchange="validate()" onkeypress="validate()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add customer</button>
                <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

@endsection
