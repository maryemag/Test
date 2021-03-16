@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('admin panel') }}</div>

                <div class="card-body">
                    <h4>welcome {{$username}}</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection