@extends('layoutCustom.main')
@section('sidebar')
<li>
<ul><a href="{{route('user.home.index')}}">HOME</a></ul> 
<ul><a href="{{route('recharge')}}">RECHARGE</a></ul>
<ul><a href="{{route('withdraw')}}">WITHDRAW</a></ul>     
<ul><a href="{{route('sendMoney')}}">SEND MONEY</a></ul>  
<ul><a href="{{route('transaction')}}">TRANSACTION HISTORY</a></ul>
<ul><a href="{{route('password.confirm')}}">CHANGE PASSWORD</a></ul>
<ul><a href="{{route('profile.update')}}">UPDATE PROFILE</a></ul>
<ul><a href="{{ route('bio') }}">DOWNLOAD BANK STATEMENT</a></ul>
<ul><a href="{{ route('logout.custom') }}">LOGOUT</a></ul>
</li>
  

@endsection
