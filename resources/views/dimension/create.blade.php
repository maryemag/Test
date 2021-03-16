@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">new dimension</div>

                <div class="card-body">
                    <form action="/subjects/{{$subject->id}}/dimensions" method="post">
				@csrf	
				  
				
		        <div class="form-group">
                    <label for="title">title</label>
                    <input  name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title ">
                    <small id="titleHelp" class="form-text text-muted">tilte of dimension</small>
					@error('title')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				
				
				<button type="submit" class="btn btn-primary">add dimension</button>
				
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection