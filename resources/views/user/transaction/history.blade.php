@extends('layoutCustom.sidebar')
@section('title')
    Transaction 
@endsection
@section('pageName')  
Transaction History 
@endsection
@section('content')
<head>
<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
      background-color: #4CAF50;
      color: white;
    }
    </style>
</head>
      
    <table>
    <tr>
        <th>Transaction Id</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
        <th>Date</th>
        <th>type</th>
    </tr>
    
    @for($i = 0; $i < count($transaction); $i++)
    <tr>
    <td>{{$transaction[$i]['tid']}}</td>
    <td>{{$transaction[$i]['sender']}}</td>
    <td>{{$transaction[$i]['receiver']}}</td>
    <td>{{$transaction[$i]['amount']}}</td>
    <td>{{$transaction[$i]['date']}}</td>
    <td>{{$transaction[$i]['type']}}</td>
    </tr>
    @endfor
   
 <tr>  
</table>
<a href="{{route('download')}}">DOWNLOAD HISTORY</a>
@endsection