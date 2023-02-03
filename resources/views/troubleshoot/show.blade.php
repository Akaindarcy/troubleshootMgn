
@extends('troubleshoot.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">

        <p class="card-text">Address : {{ $troubleshoots->description }}</p>
        <h5 class="card-title">Name : {{ $troubleshoots->level }}</h5>
        <p class="card-text">Address : {{ $troubleshoots->step }}</p>
        <h5 class="card-title">Name : {{ $troubleshoots->category_id }}</h5>
        <p class="card-text">Address : {{ $troubleshoots->device_id }}</p>

  </div>
    </hr>
  </div>
</div>