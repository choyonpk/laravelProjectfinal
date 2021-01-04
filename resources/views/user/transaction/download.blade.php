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
      <h1>TRANSACTION HISTORY</h1>
    <table>
    <tr>
        <th>Transaction Id</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
        <th>Date</th>
        <th>type</th>
    </tr>
    
    @foreach ($transaction as $item)
         <tr>
    <td>{{$item->tid}}</td>
    <td>{{$item->sender}}</td>
    <td>{{$item->receiver}}</td>
    <td>{{$item->amount}}</td>
    <td>{{$item->date}}</td>
    <td>{{$item->type}}</td>
    </tr>
    @endforeach
   
   
 <tr>  
</table>