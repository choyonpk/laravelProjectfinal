@extends('layoutCustom.sidebar')
@section('title')
RECHARGE
@endsection
@section('pageName')  
RECHARGE
@endsection
@section('content')
<body>  
<form method="POST">
      @csrf
    <table>
        <tr>
            <td>PHONE NUMER</td>
            <td><input type="text" name="to"></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type="text" name="amount"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="" value="Send"></td>
        </tr>
    </table>
  </form>
 
  </body>
@endsection