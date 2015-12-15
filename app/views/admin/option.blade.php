<option value="0">--Pilih Salah Satu--</option>
@foreach($list as $r)
	<?php $selected = ($param > 0 && $r->id == $param) ? "selected='selected'":"";?>
	<option {{$selected}} value="{{$r->id}}">{{$r->name}}</option>
@endforeach