@extends('layoutCustom.sidebar')
@section('title')
    Send Money
@endsection
@section('pageName')  
Send Money 
@endsection
@section('content')
<body>  

<form method="POST">
      @csrf
    <table>
        <tr>
            <td>Receiver username</td>
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