@extends('dashboard.homedashboard.home')

@section('content')
     <div class="card">
        <div class="card-header">
            Add new Course <br>
          
        </div>
       
@if ($errors->any())
@include('layout.error')
@endif

<form action="{{ route('course.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
   
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="name">Course</strong>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Course">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="role">Description</strong>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('course.index') }}">Cancel</a>
       
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            
       
    </div>
    </div>
   
   
 </div>
</div>
</form>
    </div> 

 

@endsection 