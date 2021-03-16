@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$organization->name}}</div>

                <div class="card-body">
				<a  class ="btn btn-dark" href="/organizations/{{$organization->id }}/subjects/createTwo"> add new subject</a>
                </div>
            </div>
			@foreach($organization->subjects as $subject)
			    <div class="card mt-4">
				    <div class="card-header">{{$subject->title}}</div>
					<a class="btn btn-primary" href="/subjects/{{$subject->id }}/dimensions/create"> add new dimension</a>
					
					 
				</div>
			@endforeach
			
        </div>
    </div>
</div>
@endsection
