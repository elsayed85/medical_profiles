@extends('layouts.master')
@section('title' , $user->name)
@section('content')
    <h3>hi <b>{{ $user->name }}</b> with theme <b>"{{ \Theme::current() }}"</b></h3>
@endsection
