
@extends('sparepart.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/sparepart/create') }}" class="btn btn-success btn-sm" title="Add New Sparepart">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Model</th>
                                        <th>Applies</th>
                                        <th>Year Of Manifacture</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($spareparts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name_sparepart }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->applies }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->yearManifacture }}</td>
  
                                        <td>
                                            <a href="{{ url('/sparepart/' . $item->id) }}" title="View Sparepart"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/sparepart/' . $item->id . '/edit') }}" title="Edit Sparepart"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/sparepart' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Sparepart" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection