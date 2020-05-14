@extends('layouts.adminlte')

@section('contents')

    <div class="'row">
        <div class="col-lg-12" style="text-align: center">
            <h1>Customer</h1>
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
                <td class="text-center"><strong>Gender</strong></td>
                <td class="text-center"><strong>Phone</strong></td>
                <td class="text-center"><strong>Email</strong></td>
                <td class="text-center"><strong>Address</strong></td>
                <td class="text-center"><strong>ID project</strong></td>
                <td colspan=3 class="text-center"><strong>Action</strong></td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="text-center">{{$customer->id}}</td>
                    <td class="text-center"><img src="{{$customer->image}}" style="width: 60px; height: 50px; margin-right: 25px;"></td>
                    <td class="text-center">{{$customer->name}}</td>
                    <td class="text-center">{{$customer->gender}}</td>
                    <td class="text-center">{{$customer->phone}}</td>
                    <td class="text-center">{{$customer->email}}</td>
                    <td class="text-center">{{$customer->address}}</td>
                    <td class="text-center">{{$customer->projects_id}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('customers.show',$customer->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('customers.destroy',$customer->id)}}" method="post">
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
