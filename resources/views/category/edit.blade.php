
@extends('category.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px">
  <div class="card-header">Edit Category</div>
  <div class="card-body">
       
      <form action="{{ url('category/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name_category" id="name" value="{{$categories->name_category}}" class="form-control"></br>

 <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop