@extends('layouts.home')

@section('initjs')
	<script src="{{ asset('js/ace.js') }}" type="text/javascript" charset="utf-8"></script>
@stop

@section('top')
	@include('menus.topmenu')
@stop


@section('content')
	@include('panels.compiler')
@stop

@section('js')
	<script type="text/javascript">
	    var editor = ace.edit("editor");
	    editor.setTheme("ace/theme/twilight");
	    editor.getSession().setMode("ace/mode/javascript");
	</script>
@stop