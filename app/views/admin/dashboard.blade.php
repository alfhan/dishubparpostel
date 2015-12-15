@extends('admin.layout')

@section('styleimport')
  
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Dashboard <b>{{$title}}</b></h3>
			</div>
			<div class="panel-body" style="height:450px">
				<!--Grafik Here-->
				<center>
				<div style="width: 100%">
					<canvas id="canvas" width="100%" height="400"></canvas>
				</div>
				</center>
				<!-- End Graph -->
			</div>
			<div class="panel-footer">
				<a href="{{URL::to('admin/dashboard/menara')}}" class="btn btn-primary">Menara</a>
				<a href="{{URL::to('admin/dashboard/zona')}}" class="btn btn-primary">Zona</a>
			</div>
		</div>
	</div>
</div>

<?php
	$thisYear = date("Y");
	$lastYear = date("Y")-1;
?>
<footer>
  <p class="pull-right"><a href="http://sagaratech.co.id"> &copy; Sagara Technology</a></p>
  <p> Sistem informasi Pendataan Menara &middot;</p>
</footer>
@stop

@section('scriptimport')
  <script type="text/javascript" src="{{URL::to('bootstrap/Chart/Chart.min.js')}}"></script>
  <script type="text/javascript">
  	var barChartData = {
  		@if($title=='Menara')
			labels : [@foreach($perusahaan as $p) "{{$p->nama_perusahaan}}", @endforeach],
		@elseif($title=='Zona')
			labels : [@foreach($zona as $k=>$v) "{{$v}}", @endforeach],
		@endif
		datasets : [
			{
				label : '{{$lastYear}}',
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				@if($title=='Menara')
				data : [@foreach($perusahaan as $p) "{{$p->tower()->whereDibangunTahun($lastYear)->count()}}", @endforeach],
				@elseif($title=='Zona')
				data : [@foreach($zona as $k=>$v) <?php $t = Tower::whereKabkotaId($kabKotaId)->whereZona($v)->whereDibangunTahun($lastYear)->get()->count();?>"{{$t}}", @endforeach],
				@endif
			},
			{
				label : '{{$thisYear}}',
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				@if($title=='Menara')
				data : [@foreach($perusahaan as $p) "{{$p->tower()->whereDibangunTahun($thisYear)->count()}}", @endforeach],
				@elseif($title=='Zona')
				data : [@foreach($zona as $k=>$v) <?php $t = Tower::whereKabkotaId($kabKotaId)->whereZona($v)->whereDibangunTahun($thisYear)->get()->count();?>"{{$t}}", @endforeach],
				@endif
			}

		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true,
			multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>",
			maintainAspectRatio: false
		});
	}
  </script>
@endsection