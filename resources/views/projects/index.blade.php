@extends('layouts.adminlte')

@section('contents')

    <div class="'row">
        <div class="col-lg-12" style="text-align: center">
            <h1>Project</h1>
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
                <td class="text-center"><strong>Title</strong></td>
                <td class="text-center"><strong>Description</strong></td>
                <td class="text-center"><strong>Status</strong></td>
                <td class="text-center"><strong>Time_estime</strong></td>
                <td class="text-center"><strong>Start date</strong></td>
                <td class="text-center"><strong>End date</strong></td>
                <td class="text-center"><strong>ID member</strong></td>
                <td class="text-center"><strong>ID customer</strong></td>
                <td colspan=3 class="text-center"><strong>Action</strong></td>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td class="text-center">{{$project->id}}</td>
                    <td class="text-center">{{$project->title}}</td>
                    <td class="text-center">{{$project->description}}</td>
                    <td class="text-center">{{$project->status}}</td>
                    <td class="text-center">{{$project->time_estime}}</td>
                    <td class="text-center">{{$project->start_date}}</td>
                    <td class="text-center">{{$project->end_date}}</td>
                    <td class="text-center">{{$project->members_id}}</td>
                    <td class="text-center">{{$project->customers_id}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('projects.show',$project->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('projects.edit',$project->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('projects.destroy',$project->id)}}" method="post">
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
