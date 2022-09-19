@extends('layout.main')
@section('content')

	<h1>Welcome {{auth()->user()->name}}</h1>
	<h6><a href="{{url('/admin/logout')}}">Logout</a></h3>

@endsection