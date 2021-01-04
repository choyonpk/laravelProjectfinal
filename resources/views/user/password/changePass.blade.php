@extends('layoutCustom.sidebar')
@section('title')
   Change Password
@endsection
@section('pageName')  
Change Password
@endsection
@section('content')
    <form action="" method="post" >
      @csrf 
        <table>
        <tr>
            <td>New Password</td>
            <td><input type="password" name="pass" ></td>
        </tr>
        <tr>
            <td>Confirm New Password</td>
            <td><input type="password" name="con_pass" ></td>
        </tr>
            <tr>
                <td></td>
        <td><input type="submit" value="Change" name="submit"></td>
            </tr>
    </form>
@endsection