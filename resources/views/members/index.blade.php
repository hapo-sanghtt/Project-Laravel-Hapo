@extends('members.base')

@section('action-content')

    <div class="'row">
        <div class="col-lg-12" style="text-align: center">
            <h1>Member</h1>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('members.create')}}">New member</a>
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
                <td class="text-center"><strong>Image</strong></td>
                <td class="text-center"><strong>Full name</strong></td>
                <td class="text-center"><strong>Password</strong></td>
                <td class="text-center"><strong>Gender</strong></td>
                <td class="text-center"><strong>Email</strong></td>
                <td class="text-center"><strong>Phone</strong></td>
                <td class="text-center"><strong>Address</strong></td>
                <td class="text-center"><strong>Role</strong></td>
                <td class="text-center"><strong>ID project</strong></td>
                <td colspan=3 class="text-center"><strong>Action</strong></td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td class="text-center">{{$student->id}}</td>
                    <td class="text-center">{{$student->image}}</td>
                    <td class="text-center">{{$student->full_name}}</td>
                    <td class="text-center">{{$student->password}}</td>
                    <td class="text-center">{{$student->gender}}</td>
                    <td class="text-center">{{$student->email}}</td>
                    <td class="text-center">{{$student->phone}}</td>
                    <td class="text-center">{{$student->address}}</td>
                    <td class="text-center">{{$student->Role}}</td>
                    <td class="text-center">{{$student->project_id}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('members.show',$member->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('members.edit',$member->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('members.destroy',$member->id)}}" method="post">
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
