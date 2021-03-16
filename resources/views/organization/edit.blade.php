@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update organization {{$organization->name}}</div>

                <div class="card-body">
                    <form action="{{route('organization.update',['id'=>$organization->id])}}" method="post">
					@csrf
				<div class="form-group">
                    <label for="name">name</label>
                    <input  name="name" type="text" class="form-control" id="name" value="{{$organization->name}}" >
                    
					@error('name')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				<div class="form-group">
                    <label for="domain">domain</label>
                    <input  name="domain" type="text" class="form-control" id="domain" value="{{$organization->domain}}"
					@error('domain')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<div class="form-group">
                    <label for="speciality">speciality</label>
                    <input  name="speciality" type="text" class="form-control" id="speciality" value="{{$organization->speciality}}"
					@error('speciality')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<div class="form-group">
                    <label for="address">address</label>
                    <input  name="address" type="text" class="form-control" id="address" value="{{$organization->address}}"
					@error('address')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<button type="submit" class="btn btn-primary">update</button>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
