
@extends('device.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $devices->name }}</h5>
        <p class="card-text">Address : {{ $devices->description }}</p>

  </div>
    </hr>
  </div>
</div>