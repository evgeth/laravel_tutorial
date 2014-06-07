@extends('base')
@section('content')
<h1>Write a twit</h1>
{{ HTML::ul($errors->all(), array('class'=>'errors'))}}

{{ Form::open(array('url' => 'write')) }}
{{ Form::label('Title') }}
<br />
{{ Form::text('title','Enter a title') }}
<br />
{{ Form::label('Twit text') }}
<br />
{{ Form::textarea('text','Enter a twit') }}
<br />
{{ Form::submit() }}
{{ Form::close() }}
<script type="text/javascript">
		$('#menu_write').addClass('active');
</script>
@stop