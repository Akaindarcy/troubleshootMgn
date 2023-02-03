
@extends('service.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px">
  <div class="card-header">Create New Divice</div>
  <div class="card-body">
       
      <form action="{{ url('service') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br>
        <input type="text" name="name_service" id="name_service" class="form-control"></br>
        <label>Service Lead</label></br>

        <select name="chief_id" id="chief_id" class="form-control">
            <option value=""select disabled>== select service lead</option>
            @foreach($users as $user)
                <option value="{{$user->id}} ">{{$user->name_first}}</option>
            @endforeach
        </select>

        <label for="">Departement</label> </br>
        <select name="department_id" id="department_id" class="form-control">
            <option value=""select disabled >== select department ==</option>
            @foreach($departments as $department)
                <option value="{{$department->id}} " >{{$department->name_department}}</option>
            @endforeach
        </select>
</br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop