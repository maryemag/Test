@extends('layouts.admin')

@section('content')
<div class="container">
                <div class="card-header">subjects</div>

                <div class="card-body">
				<table class="table table-striped">
                    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
	    <th scope="col">description</th>
      <th>Edit</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach ($subjects as $subject)
    <tr>
      <th scope="row">{{$subject->id}}</th>
      <td>{{$subject->title}}</td>
      <td>{{$subject->description}}</td>
	   <td>
            <a class="btn btn-primary"  href="{{route('subject.edit',['id'=>$subject->id])}}">edit</a>
			      <a class="btn btn-primary"  href="{{route('subject.delete',['id'=>$subject->id])}}">delete</a>
			
	   </td>
	
    </tr>
@endforeach

	</table>
  </tbody>
</table>
				    
</div>
  </div>
			
        </div>
		</div>
    </div>
</div>
@endsection
    
			
