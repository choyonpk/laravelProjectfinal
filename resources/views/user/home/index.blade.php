@extends('layoutCustom.sidebar')
@section('title')
    HOME
@endsection
@section('pageName')  
USER DASHBOARD  
@endsection
@section('content')
    <h1>BALANCE : {{$balance}}</h1>
    <img src="{{asset('upload/'.$pic)}}" alt="pro_pic" width="400" height="400">
    <form action="{{route('pic')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr><td> </td>
        <td><input type="file" name="image" id="fileToUpload"></td>
            </tr>
            <tr>
                <td></td>
        <td><input type="submit"  value="Upload Image" name="submit"></td>
            </tr>
    </form>
    
@endsection

