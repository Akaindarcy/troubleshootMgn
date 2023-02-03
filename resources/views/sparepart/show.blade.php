
@extends('sparepart.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Spare part Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $spareparts->name }}</h5>
        <p class="card-text">Address : {{ $spareparts->type }}</p>
        <p class="card-text">Mobile : {{ $spareparts->model }}</p>
        <p class="card-text">Address : {{ $spareparts->applies }}</p>
        <p class="card-text">Mobile : {{ $spareparts->yearManifacture }}</p>
  </div>
    </hr>
  </div>
</div>