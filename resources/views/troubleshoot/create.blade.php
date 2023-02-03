
@extends('troubleshoot.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:25px;">
  <div class="card-header">Create New Divice</div>
  <div class="card-body">
       
      <form action="{{ url('troubleshoot') }}" method="post">
        {!! csrf_field() !!}
        <label>Name </label></br>
        <input hidden type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Level</label></br>
        <input type="text" name="level" id="level" class="form-control"></br>
        <label>Step</label></br>
        <input type="text" name="step" id="step" class="form-control"></br>
   
        <label>Category</label></br>
        <select name="category_id" id="" class="form-control">
            <option value=""   select disabled >== select service==</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name_category}}</option>
            @endforeach
        </select></br>
        <label>Device</label></br>

        <select name="device_id" id="" class="form-control">
            <option value=""   select disabled >== select service==</option>
            @foreach($devices as $device)
            <option value="{{$device->id}}">{{$device->name_device}}</option>
            @endforeach
        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop