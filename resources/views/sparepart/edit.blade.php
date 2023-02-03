
@extends('device.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Device</div>
  <div class="card-body">
       
      <form action="{{ url('sparepart/' .$spareparts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$spareparts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name_sparepart" id="name_sparepart" value="{{$spareparts->name_sparepart}}" class="form-control"></br>
        <label>ipAddress</label></br>
        <input type="text" name="type" id="ipAddress" value="{{$spareparts->type}}" class="form-control"></br>
        <label>Propery</label></br>
        <input type="text" name="model" id="property" value="{{$spareparts->model}}" class="form-control"></br>
        <input type="text" name="applies" id="ipAddress" value="{{$spareparts->applies}}" class="form-control"></br>
        <label>Propery</label></br>
        <input type="text" name="yearManifacture" id="property" value="{{$spareparts->yearManifacture}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop