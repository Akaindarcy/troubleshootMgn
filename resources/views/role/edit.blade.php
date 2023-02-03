
@extends('department.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px">
  <div class="card-header">Edit Role</div>
  <div class="card-body">
       
      <form action="{{ url('role/' .$role->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$role->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name_role" id="name" value="{{$role->name_role}}" class="form-control"></br>

 <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop