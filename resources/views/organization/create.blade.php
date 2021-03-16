@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">new organization</div>

                <div class="card-body">
                    <form action="/organizations" method="post">
					@csrf
				<div class="form-group">
                    <label for="name">name</label>
                    <input  name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name ">
                    <small id="nameHelp" class="form-text text-muted">name of organization</small>
					@error('name')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				<div class="form-group">
                    <label for="domain">domain</label>
                    <input  name="domain" type="text" class="form-control" id="domain" aria-describedby="domainHelp" placeholder="Enter domain ">
                    <small id="domainHelp" class="form-text text-muted">domain of organization</small>
					@error('domain')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<div class="form-group">
                    <label for="speciality">speciality</label>
                    <input  name="speciality" type="text" class="form-control" id="speciality" aria-describedby="specialityHelp" placeholder="Enter speciality ">
                    <small id="specialityHelp" class="form-text text-muted">speciality of organization</small>
					@error('speciality')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<div class="form-group">
                    <label for="address">address</label>
                    <input  name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter address ">
                    <small id="addressHelp" class="form-text text-muted">address of organization</small>
					@error('address')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				<button type="submit" class="btn btn-primary">create organization</button>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
