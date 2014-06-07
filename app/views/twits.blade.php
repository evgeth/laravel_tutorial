@extends('base')
@section('content')
<h1> Last twits! </h1>
	@if ($twits->isEmpty())
		<p>No twits yet! </p>
	@else
		<table class="table table-striped table-bordered"> 
			<tr>
				<th> # </th> 
				<th> Title </th> 
				<th> Text </th> 
			</tr>
			@foreach($twits as $twit)
			<tr>
				<td> {{ $twit->id }} </td>
				<td> {{ $twit->title }} </td>
				<td> {{ $twit->text }} </td>
			</tr>
			@endforeach
		</table>
	@endif
	<script type="text/javascript">
		$('#menu_twits').addClass('active');
	</script>
@stop