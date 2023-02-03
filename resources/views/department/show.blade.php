
@extends('department.layout')
@section('content')
  
<div class="card" style="margin:140px; margin-top:20px">
  <div class="card-header">Department Page</div>
      <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">Name : {{ $departments->name_department }}</h5>
            <h5 class="card-title">Name : {{ $departments->myUser->name_first }}</h5>
            <h5 class="card-title">Name : {{ $departments->myUser->name_last }}</h5>

      </div>
    </hr>
  </div>
</div>