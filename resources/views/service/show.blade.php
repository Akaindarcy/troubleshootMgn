
@extends('service.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Service Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $services->name }}</h5>
        <p class="card-text">Address : {{ $services->description }}</p>

  </div>
    </hr>
  </div>
</div>