@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$subject->title}}</div>

                <div class="card-body">
				<a  class ="btn btn-dark" href="/subjects/{{$subject->id }}/dimensions/create"> add new dimension</a>

                </div>
            </div>
			@foreach($subject->dimensions as $dimension)
			    <div class="card mt-4">
				    <div class="card-header">{{$dimension->title}}</div>
					<div><a class="btn btn-primary" href="/dimensions/{{$dimension->id }}/subdimensions/create"> add new subdimension</a></div>
					
					 
				</div>
			@endforeach
			
        </div>
    </div>
</div>
@endsection