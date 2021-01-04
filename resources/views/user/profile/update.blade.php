@extends('layoutCustom.sidebar')
@section('title')
    Profile Update
@endsection
@section('pageName')  
Update Your Information
@endsection
@section('content')
    <form action="" method="post">
        @csrf
    <table> 
        <tr>
            <td>Name</td>
            <td><input type="text" name = 'name' value='{{$name}}'></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name = 'email' value='{{$email}}'></td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name = 'phone' value='{{$phone}}'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" ></td>
        </tr>
    </table>
    </form>
    
@endsection