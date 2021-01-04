@extends('layoutCustom.sidebar')
@section('title')
WITHDRAW
@endsection
@section('pageName')  
WITHDRAW
@endsection
@section('content')
<body>  
<form method="POST">
      @csrf
    <table>
        <tr>
            <td>AGENT USERNAME</td>
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