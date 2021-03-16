@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
				<h4>{{$subdimension->title}}</h4>

                <div class="card-body">
				<a  class ="btn btn-dark" href="/subdimensions/{{$subdimension->id }}/criterions/create"> add new criterion</a>
				<a  class ="btn btn-dark" href="/surveys/{{$subdimension->id}}-{{ Str::slug($subdimension->title)}}">Take Survey</a>
				
                </div>
				
            </div>
				@foreach($subdimension->criterions as $criterion)
				<div class="card">
			    
				<div class="card-header">{{$criterion->criterion}}</div>
					
					<div class="card-body">
					    <ul class="list-group">
						@foreach($criterion->proposals as $proposal)
						    <li class="list-group-item">{{ $proposal->proposal}}</li>	
						@endforeach
						</ul>
					</div>
					</div>
			@endforeach
				
        </div>
    </div>
</div>
@endsection