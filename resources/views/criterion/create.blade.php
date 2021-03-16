@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">new criterion</div>

                <div class="card-body">
                    <form action="/subdimensions/{{$subdimension->id}}/criterions" method="post">
				@csrf	
				  
				
		        <div class="form-group">
                    <label for="criterion">criterion</label>
                    <input  name="criterion[criterion]" type="text" class="form-control" id="criterion" aria-describedby="criterionHelp" placeholder="Enter Criterion">
                    
					@error('criterion.criterion')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				<div class="form-group">
				<fieldset>
				<legend>Proposals</legend>
				<div>
				<div class="form-group">
                    <label for="proposal1">choice1</label>
                    <input  name="proposals[][proposal]" type="text" class="form-control" id="proposal1" aria-describedby="proposalHelp" placeholder="Enter choice 1">
                    
					@error('proposals.0.proposal')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				</div>
				<div>
				<div class="form-group">
                    <label for="proposal2">choice2</label>
                    <input  name="proposals[][proposal]" type="text" class="form-control" id="proposal2" aria-describedby="proposalHelp" placeholder="Enter choice 2">
                    
					@error('proposals.1.proposal')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				</div>
				<div>
				<div class="form-group">
                    <label for="proposal3">choice3</label>
                    <input  name="proposals[][proposal]" type="text" class="form-control" id="proposal3" aria-describedby="proposalHelp" placeholder="Enter choice 3">
                    
					@error('proposals.2.proposal')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				</div>
				<div>
				<div class="form-group">
                    <label for="proposal4">choice4</label>
                    <input  name="proposals[][proposal]" type="text" class="form-control" id="proposal4" aria-describedby="proposalHelp" placeholder="Enter choice 4">
                    
					@error('proposals.3.proposal')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				</div>
				<div>
				<div class="form-group">
                    <label for="proposal5">choice5</label>
                    <input  name="proposals[][proposal]" type="text" class="form-control" id="proposal5" aria-describedby="proposalHelp" placeholder="Enter choice 5">
                    
					@error('proposals.4.proposal')
					    <small class="text-danger">{{$message}}</small>
					@enderror
					
                </div>
				</div>
				</fieldset>
				</div>
				
				
				<button type="submit" class="btn btn-primary">add creterion</button>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection