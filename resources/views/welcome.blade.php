@extends('master')
@section('Title', 'Detail')
@section('Style', '/stylee.css')
@section('content')
<div class="det">
<h1>{{$tmp['nama']}}</h1>
<img src="{{asset('Assets/'.$tmp['nama'].'.jpg')}}" alt="">
<h2>Difficulty: {{$tmp['status']}}</h2>
<h2>Champion Price: {{$tmp['price']}}</h2>
<h2>Profile</h2>
<h4>{{$tmp['desc']}}</h4>
</div>
@endsection
