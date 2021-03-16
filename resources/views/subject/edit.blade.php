@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update subject {{$subjects->title}}</div>

                <div class="card-body">
                    <form action="{{route('subject.update',['id'=>$subjects->id])}}" method="post">
					@csrf
				<div class="form-group">
                    <label for="organization_id">organization name</label>
                    <select  name="organization_id" type="text" class="form-control" id="organization_id"  >
					@foreach($organizations as $organization)
					    <option value ="{{$organization->id}}">{{$organization->name}}</option>
					
					@endforeach
                    
					@error('organization_id')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					</select>
                </div>
				<div class="form-group">
                    <label for="title">title</label>
                    <input  name="title" type="text" class="form-control" id="title" value="{{$subjects->title}}" >
                    
					@error('title')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                </div>
				
				<div class="form-group">
                    <label for="description">description</label>
                    <input  name="description" type="text" class="form-control" id="description" value="{{$subjects->description}}">
					@error('description')
					    <small class="text-danger">{{$message}}</small>
					@enderror
                
				<button type="submit" class="btn btn-primary">update</button>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
