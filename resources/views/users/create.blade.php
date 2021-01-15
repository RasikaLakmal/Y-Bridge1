@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create User</h2>
            </div>
            <div class="pull-right">
               
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
       

        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
            <label for="Role">You are a:</label>
  <select id="Role" name="Role">
    <option value="Lecturer">Lecturer</option>
    <option value="Student">Student</option>
    <option value="Industrialist">Industrialist</option>
   
  </select></div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>UserName:</strong>
                    <input type="string" name="UserName" value="" class="form-control" placeholder="UserName">
                </div>
            </div>
          
           
  
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>password</strong>
                    <input type="password" name="password"  class="form-control" placeholder="password"
                        >
                </div>
            </div>
           <form method="post" action="/store"> <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Register">
            </div></form>
        </div>
        <div class="row">
                    <div class="col-xs-8">Already have account? <a href="lgn"> Login</a>
                    </div>
                   
                </div>

    </form>
@endsection