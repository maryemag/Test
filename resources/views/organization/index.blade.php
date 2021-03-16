@extends('layouts.admin')

@section('content')
<div class="container">
    
    <div class="card-header">organizations</div>

    <div class="card-body">
  <table class="table table-striped">
    <thead>
  
  
    <tr>
      <th scope="col">num organization</th>
      <th scope="col">name</th>
      <th scope="col">domain</th>
    <th scope="col">speciality</th>
    <th scope="col">address</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($organizations as $organization)
    <tr>
      <th>{{$organization->id}}</th>
      <th>{{$organization->name}}</th>
      <th>{{$organization->domain}}</th>
      <th>{{$organization->speciality}}</th>
    <th>{{$organization->address}}</th>
    
    <th>
        <a class="btn btn-success" href="{{route('organization.edit',['id'=>$organization->id])}}">edit</a>
      </th>
    <th>
    <a class="btn btn-danger" href="{{route('organization.delete',['id'=>$organization->id])}}">delete</a>  
    </th>
      
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