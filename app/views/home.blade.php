@extends('layouts')

@section('content')
<!--Carousel-->
<div class="row">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  <?php $i=0;?>
	  @foreach($tower as $rt)
	    <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li> -->
	    @if($i==0)
	     <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
	    @else
	     <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
	    @endif
	    <?php $i++;?>
	  @endforeach
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	  	<?php $i = 0?>
	  	@foreach($tower as $rt)
		    @if($i==0)
		     <div class="item active">
		      <center>
		      <img src="{{URL::to('image/'.$rt->gambar)}}" alt="{{$rt->keterangan}}" />
		      </center>
		     </div>
		    @else
		     <div class="item">
		      <center>
		      <img src="{{URL::to('image/'.$rt->gambar)}}" alt="{{$rt->keterangan}}" />
		      </center>
		     </div>
		    @endif
		    <?php $i++;?>
		@endforeach
			
	  </div>
	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="col-md-6">
		<img src="{{URL::to('image/front/7.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-6">
		<img src="{{URL::to('image/front/8.jpg')}}" class="img-responsive pull-right">
	</div>
</div>
@stop