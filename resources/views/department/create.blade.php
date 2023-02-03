
@extends('department.layout')
@section('content')
  
<div class="card" style="margin:250px;margin-top:20px;">
  <div class="card-header">Create New Divice</div>
  <div class="card-body">
       
      <form action="{{ url('department') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name_department" id="department" class="form-control"></br>
        <label for="">Chief Of Departement</label>
        <select name="chief_id" id="chief_id"  class="form-control">
                <option value=""selected disabled>Chief of Departement</option>
                @foreach($users as $item)
                         <option value="{{$item->id}}" class="form-control"> {{$item->name_first}} </option>
                @endforeach
        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop