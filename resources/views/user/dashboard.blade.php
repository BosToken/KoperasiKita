@extends('partials.user.page')
@section('title', 'Dashboard - Koperasi Z')
@section('container')
<div class="container">
@if($user->role_id === "1")      
    <center><h3>Welcome {{$user->username}} to this website you are logged in as admin here.</h3></center>
@else
    <center><h3>Welcome {{$user->username}} to this website you are logged in as user here.</h3></center>
@endif
</div>

<style>
    h3{
        color :black;
    }
</style>

@stop