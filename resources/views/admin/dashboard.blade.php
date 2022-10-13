@extends('layout.main')
@section('content')

	<br>
	<h1>Welcome {{auth()->user()->name}}</h1>
	

@endsection