@extends('layouts.app')

@section('content')
<div class="container">
    <div aling="center">
        <h3>Congratulations! You earn 1 coin.</h3>
    </div>
        <img src="coin1.png" alt="One Point" width="42" height="42" style="vertical-align:middle">
        <div class="card mt-5">
            <h4 class="mt-0">Share the following link to earn more points</h4>
            <a href="#" class="stretched-link">{{ '127.0.0.1:8000/'.$id }}</a>
        </div>

</div>

@endsection
