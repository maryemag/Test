@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<h1>{{$subdimension->title}}</h1>
	
		
		<form action="/surveys/{{$subdimension->id}}-{{Str::slug($subdimension->title)}}" method="post">
		    @csrf
			@foreach($subdimension->criterions as $key=>$criterion)
			<div class="card mt-4">
			
				    <div class="card-header"><strong>{{$key +1}}</strong>{{$criterion->criterion}}</div>
					
					<div class="card-body">
					    @error('responses.' .$key. '.proposal_id')
						    <small class="text-danger">{{$message}}</small>
						
						
						@enderror
					    <ul class="list-group">
						@foreach($criterion->proposals as $proposal)
						<label for="proposal{{$proposal->id}}">
						    <li class="list-group-item">
							<input type="radio" name="responses[{{$key}}][proposal_id]" id="proposal{{$proposal->id}}" class="ml-2" value="{{$proposal->id}}">
							{{ $proposal->proposal}}
							<input type="hidden" name="responses[{{$key}}][proposal_id]" value="{{$criterion->id}}">
							</li>
                        </label>							
						@endforeach
						</ul>
					</div>
					</div>
			@endforeach

			
		    
			
		    <div class="card-header">your information</div>
					
		    <div class="card-body">
			<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">your name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">your email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
			
            </div>
			<div>
			<button type="submit" class="btn btn-primary">complate survey</button>
			</div>
            </div>
			
			</div>
			</form>
			
        </div>
    </div>
</div>
@endsection