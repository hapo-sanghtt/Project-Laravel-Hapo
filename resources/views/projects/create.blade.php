@extends('layouts.adminlte')

@section('contents')

    <div class="add_project">
        <h4 class="text-center">Add a project</h4>
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
    <form method="post" action="{{ route('projects.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                   onchange="validate()">
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" id="description" class="form-control"
                                   placeholder="Description" onchange="validate()">
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            <input type="number" name="status" id="status" class="form-control" placeholder="Status"
                                   onchange="validate()">
                        </div>
                        <div class="form-group">
                            <strong>Time estime:</strong>
                            <input type="text" name="time_estime" id="time_estime" class="form-control"
                                   placeholder="Time estime" onchange="validate()" onkeypress="validate()">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Start date:</strong>
                            <div class="col-md-6">
                                <input type="text" autocomplete="off" class="datepicker-here" data-multiple-dates="3"
                                       data-multiple-dates-separator=", " data-language='en'
                                       data-position='bottom right'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>End date:</strong>
                            <div class="col-md-6">
                                <input type="text" autocomplete="off" class="datepicker-here" id="end_date"
                                       data-multiple-dates="3" data-multiple-dates-separator=", " data-language='en'
                                       data-position='top left'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>ID member:</strong>
                            <div class="col-md-6">
                                <input type="text" name="members_id" id="members_id" class="form-control"
                                       placeholder="ID member" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>ID customer:</strong>
                            <div class="col-md-6">
                                <input type="text" name="customers_id" id="customers_id" class="form-control"
                                       placeholder="ID customer" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Add project</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
