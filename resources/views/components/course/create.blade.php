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
                <input type="text" name="name" class="form-control" placeholder="Course">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="role">Description</strong>
                <input type="text" name="description" class="form-control" placeholder="Description">
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