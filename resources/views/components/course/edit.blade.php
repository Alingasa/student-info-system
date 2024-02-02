@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Course
        </div>
    
    @if ($errors->any())
    @include('layout.error')
@endif

<form action="{{ route('course.update',$course->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <select  class="form-control" name="name" id="name">
                    <option value="BSIT">BSIT</option>
                    <option value="BSED-SS">BSED-SS</option>
                    <option value="BSED-MATH">BSED-MATH</option>
                    <option value="BEED">BEED</option>
                    
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong for="role">Description</strong>
            <input type="text" name="description" value="{{ $course->description }}" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      <br>
       
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>  
            <a class="btn btn-danger btn-sm" href="{{ route('course.index') }}">Cancel</a> 
            <div class="form-group">
                
        </div>
        
      
        </div>
        </div>
        
      
        </div>
  
       
    </div>
    
    </div>

</form>

    </div>
@endsection

 
   