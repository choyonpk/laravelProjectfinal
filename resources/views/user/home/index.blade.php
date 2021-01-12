@extends('layoutCustom.sidebar')
@section('title')
    HOME
@endsection
@section('pageName')  
USER DASHBOARD  
@endsection
@section('content')
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <div class="form-group">
         <h1>BALANCE : {{$balance}}</h1>
    </div>
    <div class="form-group">
        <img src="{{asset('upload/'.$pic)}}" alt="pro_pic" width="400" height="400">
    </div>
    <form action="{{route('pic')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr><td> </td>
                <div class="form-group">
        <td><input type="file" name="image" id="fileToUpload"></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td></td>
        <td><input type="submit"  value="Upload Image" name="submit"></td>
            </tr>
        </div>
    </form>
</div>    
@endsection

