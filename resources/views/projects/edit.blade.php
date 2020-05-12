@extends('layouts.adminlte')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Update a project</h2>
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
                <form method="post" action="{{ route('projects.update',$projects->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$projects->title}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" class="form-control" name="description" value="{{$projects->description}}"/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" value="{{$projects->status}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Time estime:</strong>
                        <input type="text" class="form-control" name="time_estime" value="{{$projects->time_estime}}" />
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start date</label>
                        <input type="text" class="datepicker-here" name="start_date" value="{{$projects->start_date}}"/>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End date</label>
                        <input type="text" class="datepicker-here" name="end_date" value="{{$projects->end_date}}"/>
                    </div>
                    <div class="form-group">
                        <label for="members_id">ID member</label>
                        <input type="text" class="form-control" name="members_id" value="{{$projects->members_id}}"/>
                    </div>
                    <div class="form-group">
                        <label for="customers_id">ID project</label>
                        <input type="text" class="form-control" name="customers_id" value="{{$projects->customers_id}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
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
