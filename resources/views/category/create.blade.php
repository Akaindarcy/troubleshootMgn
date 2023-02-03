
@extends('department.layout')
@section('content')
  
<div class="card" style="margin:250px;margin-top:20px;">
  <div class="card-header">Create New Divice</div>
  <div class="card-body">
       
      <form action="{{ url('category') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name_category" id="category" class="form-control"></br>


        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop