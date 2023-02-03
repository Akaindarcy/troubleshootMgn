
@extends('device.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:25px;">
  <div class="card-header">Create New Divice</div>
  <div class="card-body">
       
      <form action="{{ url('device') }}" method="post">
        {!! csrf_field() !!}
        <label>Name Service</label></br>
        <input hidden type="text" name="name_device" id="name_device" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>System</label></br>
        <input type="text" name="system" id="system" class="form-control"></br>
        <label>Ip Address</label></br>

        <input type="text" name="ipAddress" id="ipAddress" class="form-control"></br>
        <label>Property</label></br>
        <input type="text" name="property" id="property" class="form-control"></br>
        <select name="service_id" id="" class="form-control">
            <option value=""   select disabled >== select service==</option>
            @foreach($services as $service)
            <option value="{{$service->id}}">{{$service->name_service}}</option>
            @endforeach
        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop