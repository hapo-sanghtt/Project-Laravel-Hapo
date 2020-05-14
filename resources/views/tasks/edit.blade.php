@extends('layouts.adminlte')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Update a task</h2>
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
                <form method="post" action="{{ route('tasks.update',$tasks->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="name" value="{{$tasks->name}}"/>
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" class="form-control" name="description" value="{{$tasks->description}}"/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" value="{{$tasks->status}}"/>
                    </div>
                    <div class="form-group">
                        <label for="members_id">ID member</label>
                        <input type="text" class="form-control" name="members_id" value="{{$tasks->members_id}}"/>
                    </div>
                    <div class="form-group">
                        <label for="projects_id">ID project</label>
                        <input type="text" class="form-control" name="projects_id" value="{{$tasks->projects_id}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-danger">Cancel</a>
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
