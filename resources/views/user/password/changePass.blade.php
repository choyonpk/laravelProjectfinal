@extends('layoutCustom.sidebar')
@section('title')
   Change Password
@endsection
@section('pageName')  
Change Password
@endsection
@section('content')
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <form action="" method="post" >
      @csrf 
        <table>
            <div class="form-group">   
        <tr>
            <td>New Password</td>
            <td><input type="password" name="pass" ></td>
        </tr>
            </div>
            <div class="form-group">
        <tr>
            <td>Confirm New Password</td>
            <td><input type="password" name="con_pass" ></td>
        </tr>
            </div>
            <div class="form-group">
            <tr>
                <td></td>
        <td><input type="submit" value="Change" name="submit"></td>
            </tr>
        </div>
        <div class="form-group">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </form>
</div>
@endsection