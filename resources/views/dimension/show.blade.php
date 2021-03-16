@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$dimension->title}}</div>

                <div class="card-body">
				<a  class ="btn btn-dark" href="/dimensions/{{$dimension->id }}/subdimensions/create"> add new subdimension</a>
				

                </div>
            </div>
			@foreach($dimension->subdimensions as $subdimension)
			    <div class="card mt-4">
				    <div class="card-header">{{$subdimension->title}}</div>
					<a class="btn btn-primary" href="/subdimensions/{{$subdimension->id }}/criterions/create"> add new criterion</a>
					
					 
				</div>
			@endforeach
        </div>
    </div>
</div>
@endsection