@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>User Request Pending Dashboard </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('users.create')}}" title="Create a user">Create a user </a>
            </div>
        </div>
    </div>
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" class="table text-center">
        <tr>
            <th>No</th>
            <th>UserName</th>
            <th>Role</th>
            <th>password</th>
            <th>Tools</th>
            
            
        </tr>
        @foreach ($users as $user)
            <tr>
                <table class="table table-dark"  class="table text-center" >
                <td>{{++$i}}</td>
                <td>{{$user->UserName}}</td>
                <td>{{$user->Role}}</td>
                <td>{{$user->password}}</td>
                
                <td>
                    <form action="{{route('users.destroy',$user->id) }}" method="Post">

                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                       

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection