@extends('admin.pendataan')

@section('styleimport')
  {{HTML::style('bootstrap/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}
@endsection

@section('content') 
<a href="{{URL::to('article')}}"> &larr; Kembali </a>

 <h1>Form Article</h1>
 <hr />
 <form action="{{URL::to('article/simpan')}}" method="post">
   <input type="hidden" value="{{isset($row)?$row->id:0}}" name="id">
   <div class="form-group">
     <label class="control-label" for="title">Title</label>
     <input class="form-control" name="title" id="title" value="{{isset($row)?$row->title:''}}" />
   </div>
   <div class="form-group">
     <label class="control-label" for="title">Description</label>
     <textarea class="form-control textarea" rows="10" name="description">{{isset($row)?$row->description:''}}</textarea>
   </div>
   {{Form::submit(isset($row)?'Ubah':'Simpan', array('class' => 'btn btn-primary')) }}
 </form>
  
 @stop

@section('scriptimport')
  {{ HTML::script('bootstrap/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
  <script type="text/javascript">
    $(document).ready(function(){
      $(".textarea").wysihtml5();
    })
  </script>
@endsection