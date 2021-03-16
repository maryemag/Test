@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">new subject</div>

                <div class="card-body">
                    <form action="/organizations/{{$organization->id}}/subjects" method="post">
				@csrf	
				  
				
		        <div class="form-group">
                    <label for="title">title</label>
                    <input  name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title ">
                    <small id="titleHelp" class="form-text text-muted">tilte of subject</small>
					@error('title')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				<div class="form-group">
                    <label for="description">description</label>
                    <input  name="description" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description ">
                    <small id="descriptionHelp" class="form-text text-muted">description of subject</small>
					@error('description')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				
				<button type="submit" class="btn btn-primary">create subject</button>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection