@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Subjects
        </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('subject.update',$subject->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" value="{{ $subject->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course</strong>
                <select  class="form-control" name="course_id" id="course_id">
                           @foreach($course as $id=>$name)   
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Started</strong>
                <input type="text" name="start_date" value="{{ $subject->start_date }}" class="form-control" placeholder="Date Started">
            </div>
      
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>  
            <a class="btn btn-danger btn-sm" href="{{ route('subject.index') }}">Cancel</a> 
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

 
   