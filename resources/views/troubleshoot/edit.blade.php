
@extends('device.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px; ">
  <div class="card-header">Edit Device</div>
  <div class="card-body">
       
      <form action="{{ url('troubleshoot/' .$troubleshoots->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Name </label></br>
        <input hidden type="text" name="name" id="name" value="{{$troubleshoots->id }}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$troubleshoots->description }}" class="form-control"></br>
        <label>Level</label></br>
        <input type="text" name="level" id="level" value="{{$troubleshoots->level }}" class="form-control"></br>


        <label>Step</label></br>
        <input type="text" name="step" id="step" value="{{$troubleshoots->step }}" class="form-control"></br>
   
        <label>Category</label></br>
        <select name="category_id" id="" class="form-control">
            <option value="{{$troubleshoots->categorie_id }}"   select disabled >{{$troubleshoots->myCategory->name_category}}</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name_category}}</option>
            @endforeach
        </select></br>
        <label>Device</label></br>

        <select name="device_id" id="" class="form-control">
            <option value="{{$troubleshoots->device_id}}"   select disabled >{{$troubleshoots->myDevice->name_device}}</option>
            @foreach($devices as $device)
            <option value="{{$device->id}}">{{$device->name_device}}</option>
            @endforeach
        </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop