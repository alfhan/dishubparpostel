@extends('layouts')

<?php $row = app\models\Article::find(9);?>
@section('content')
<div class="row" style="min-height:500px">
	<div class="col-md-12">
		<h1>{{$row->title}}</h1>
		<div class="col-md-12" style="background:#eee;border-radius:8px">
			<p>{{$row->description}}</p>
		</div>
	</div>
</div>	
@stop