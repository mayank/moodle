@extends('layouts.home')

@section('css')
	<style type="text/css">
	.assign p { color: #333 }
	</style>
@stop

@section('top')
	@include('menus.topmenu')
@stop

@section('content')
	@include('panels.assignments')
@stop