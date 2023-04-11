@extends('master')
@section('Title', 'List')
@section('Style', 'style.css')
@section('content')
<p>League of Legend Champion</p>
<div class="text-center">
    @foreach ($product as $prd)
        @if ($prd['status'] == 'R')
            <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"><div class ="cham" style="border: silver solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: silver 5px 5px 35px">
                <h2>{{ $prd['nama'] }}</h2>
                <h3>Difficulty: {{ $prd['status'] }}</h3>
                <h3>Champion Price:{{ $prd['price'] }}</h3>
            </div></a>
        @elseif ($prd['status'] == 'SR')
        <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"><div class ="cham"  style="border: gold solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: gold 5px 5px 35px">
                <h2>{{ $prd['nama'] }}</h2>
                <h3>Difficulty: {{ $prd['status'] }}</h3>
                <h3>Champion Price: {{ $prd['price'] }}</h3>
            </div></a>
        @else
        <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"> <div class ="cham"  style="border: red solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: red 5px 5px 35px">
                <h2>{{ $prd['nama'] }}</h2>
                <h3>Difficulty: {{ $prd['status'] }}</h3>
                <h3>Champion Price: {{ $prd['price'] }}</h3>
            </div></a>
        @endif
    @endforeach
</div>

@endsection
