@extends('layoutCustom.sidebar')
@section('title')
    Send Money
@endsection
@section('pageName')  
Send Money 
@endsection
@section('content')
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
    <div class="container">
<form method="POST">
      @csrf
    <table>
        <div class="form-group">
        <tr>
            <td>Receiver username</td>
            <td><input type="text" name="to"></td>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td>Amount</td>
            <td><input type="text" name="amount"></td>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td></td>
            <td><input type="submit" name="" value="Send"></td>
        </tr>
    </div>
    </table>
  </form>
    </div>
  </body>
@endsection