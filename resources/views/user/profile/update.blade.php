@extends('layoutCustom.sidebar')
@section('title')
    Profile Update
@endsection
@section('pageName')  
Update Your Information
@endsection
@section('content')
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <form action="" method="post">
        @csrf
    <table>
        <div class="form-group">   
        <tr>
            <td>Name</td>
            <td><input type="text" name = 'name' value='{{$name}}'></td>
        </tr>
        </div>
        <div class="form-group">  
        <tr>
            <td>email</td>
            <td><input type="text" name = 'email' value='{{$email}}'></td>
        </tr>
        </div>
        <div class="form-group">  
        <tr>
            <td>phone</td>
            <td><input type="text" name = 'phone' value='{{$phone}}'></td>
        </tr>
        </div>
        <div class="form-group">  
        <tr>
            <td></td>
            <td><input type="submit" ></td>
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
    </table>
    </form>
</div> 
@endsection