
@extends('sparepart.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px">
  <div class="card-header">Create New Sparepart</div>
  <div class="card-body">
       
      <form action="{{ url('sparepart') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name_sparepart" id="name_sparepart" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>Applies</label></br>
        <input type="text" name="applies" id="applies" class="form-control"></br>
        <label>Year of Manifacture</label></br>
        <input type="text" name="yearManifacture" id="yearManifacture" class="form-control"></br>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop