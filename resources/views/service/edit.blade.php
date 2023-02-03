
@extends('service.layout')
@section('content')
  
<div class="card" style="margin:250px; margin-top:20px;">
  <div class="card-header">Edit Service</div>
  <div class="card-body">
       
      <form action="{{ url('service/' .$services->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$services->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name_service" id="name_service" value="{{$services->name_service}}" class="form-control"></br>

</br>
        <label >Departement</label>
</br>
        <select name="department_id" id="department_id" class="form-control">
            <option value="{{$services->department_id}}" Select disabled>{{$services->myDepartment->name_department}}</option>
            @foreach($departments as $department)
                <option value="{{$department->id}} ">{{$department->name_department}}</option>
            @endforeach
        </select>

        </br>
        <label>Service Lead</label>
</br>
        <select name="chief_id" id="chief_id" class="form-control">
            <option value="{{$services->chief_id}}"select disabled>{{$services->myUser->name_first}}</option>
            @foreach($users as $user)
                <option value="{{$user->id}} ">{{$user->name_first}}</option>
            @endforeach
        </select>
</br>
 <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop