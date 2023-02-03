
@extends('device.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px; ">
  <div class="card-header">Edit Device</div>
  <div class="card-body">
       
      <form action="{{ url('device/' .$devices->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
         <label>Name</label></br>
        <input type="text" name="name_device" id="name_device" value="{{$devices->id}}" class="form-control"></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" value="{{$devices->name_device}}" class="form-control"></br>
        <label>model</label></br>
        <input type="text" name="model" id="model" value="{{$devices->model}}" class="form-control"></br>
        <label>system</label></br>
        <input type="text" name="system" id="system" value="{{$devices->system}}" class="form-control"></br>
        <label>Ip Address</label></br>

        <input type="text" name="ipAddress" id="ipAddress" value="{{$devices->ipAddress}}" class="form-control"></br>
        <label>property</label></br>
        <input type="text" name="property" id="property" value="{{$devices->property}}" class="form-control"></br>
        <label>service</label></br>
        <select name="service_id" id="" class="form-control">
            <option value="{{$devices->service_id}}"   select disabled >{{$devices->myService->name_service}}</option>
            @foreach($services as $service)
            <option value="{{$service->id}}">{{$service->name_service}}</option>
            @endforeach
        </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop