@extends('templates.base')

@section('title', 'Show Brand')

@section('content')


<div class="card" style="width: 18rem;">
    <div class="card-body" style="background-color: #454d55;">
        <h5 class="card-title" style="color:black">{{$brand->name}}</h5>
        <p class="card-text" style="color:black">{{$brand->country}}</p>
        <p class="card-text" style="color:black">{{$brand->description}}</p>
    </div>
</div>


@endsection
