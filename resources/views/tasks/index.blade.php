@extends('layouts.adminlte')

@section('contents')

    <div class="'row">
        <div class="col-lg-12" style="text-align: center">
            <h1>Task</h1>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.create')}}">New task</a>
            </div>
        </div>
        <br />
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p id="msg">{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <td class="text-center"><strong>ID</strong></td>
                <td class="text-center"><strong>Name</strong></td>
                <td class="text-center"><strong>Description</strong></td>
                <td class="text-center"><strong>Status</strong></td>
                <td class="text-center"><strong>ID member</strong></td>
                <td class="text-center"><strong>ID project</strong></td>
                <td colspan=3 class="text-center"><strong>Action</strong></td>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td class="text-center">{{$task->id}}</td>
                    <td class="text-center">{{$task->title}}</td>
                    <td class="text-center">{{$task->description}}</td>
                    <td class="text-center">{{$task->status}}</td>
                    <td class="text-center">{{$task->member_id}}</td>
                    <td class="text-center">{{$task->project_id}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('tasks.show',$task->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('tasks.edit',$task->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('tasks.destroy',$task->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
