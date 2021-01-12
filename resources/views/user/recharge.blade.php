@extends('layoutCustom.sidebar')
@section('title')
RECHARGE
@endsection
@section('pageName')  
RECHARGE
@endsection
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
  
    <div class="container">
  
        <form >
  
            <div class="form-group">
                <label>PHONE NUMBER:</label>
                <input type="text" name="Aname" class="form-control" placeholder="phone number" required="">
            </div>
  
            <div class="form-group">
                <label>Amount:</label>
                <input type="text" name="amount" class="form-control" placeholder="Amount" required="">
            </div>

   
            <div class="form-group">
                <button class="btn btn-success btn-submit">RECHARGE</button>
            </div>
  
        </form>
    </div>
  
</body>
<script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $(".btn-submit").click(function(e){
  
  e.preventDefault();

  var name = $("input[name=Aname]").val();
  var amount = $("input[name=amount]").val();

  $.ajax({
     type:'POST',
     url:"{{ route('recharge') }}",
     data:{name:name, amount:amount},
     success:function(response){
        alert(response.success);
     }
  });

});
	
</script>
@endsection