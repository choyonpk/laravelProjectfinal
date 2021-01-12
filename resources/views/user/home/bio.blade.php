
<div class="container">
<h1>BANK STATEMENT</h1>

<div class="form-group"><h4>Name : {{$user->name}}</h4></div>
<div class="form-group"><h4>Email: {{$user->email}}</h4></div>
<div class="form-group"><h4>Phone: {{$user->phone}}</h4></div>
<div class="form-group"><h4>Type : {{$user->type}}</h4></div>
<div class="form-group"><h4>BALANCE : {{$user->Balance}}</h4></div>
<div class="form-group"><h4>PRINTOUT DATE : {{$d['date']}}</h4></div>
<div class="form-group"><h4>PRINTOUT Time : {{$d['time']}}</h4></div>
<div class="form-group"><h4>ACCOUNT CREATED : {{$user->created_at}}</h4></div>
<div class="form-group"><h4>LAST ACTIVITY IN ACCOUNT : {{$user->updated_at}}</h4></div>

</div>