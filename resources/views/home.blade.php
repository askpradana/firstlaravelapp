@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class='container-fluid'>
<h3>Whats up?</h3>
</div>

<form action='/create' method='post'>

    <div class="col-sm-3 my-1">
        <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">@</div>
        </div>
        <input name='username' type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
    </div>

    <div class="col-sm-3 my-1"></div>
        <input name='tweet' type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Tweet Something">
    </div>

    {{csrf_field()}}

    <div class="col-sm-3 my-1">
    <button type="submit" class="btn btn-light bg-info text-white">Tweet</button>
    </div>

</form>

@foreach($tweet as $twt)
    <ul>
        {{$twt->tweet}}
        <br>
        @<strong>{{$twt->username}}</strong>
        {{ $twt->created_at->diffForHumans() }}
    </ul>
@endforeach

@endsection