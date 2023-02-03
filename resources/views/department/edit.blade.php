
@extends('department.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px">
  <div class="card-header">Edit Department</div>
  <div class="card-body">
       
      <form action="{{ url('department/' .$departments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$departments->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name_department" id="name" value="{{$departments->name_department}}" class="form-control"></br>
        <select name="chief_id" id="chief_id" class="form-control">
            <option value="{{$departments->chief_id}}" class="form-control"> {{$departments->myUser->name_first}}</option>
           @foreach($users as $user)
            <option value="{{$user->id}}" class="form-control"> {{$user->name_first}}</option>
            @endforeach
        </select>
 <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop