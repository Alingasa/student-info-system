@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Teacher
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

<form action="{{ route('teacher.update',$teacher->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name</strong>
                <input type="text" name="firstname" value="{{ $teacher->firstname }}" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name</strong>
                <input type="text" name="lastname" value="{{ $teacher->lastname }}" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" value="{{ $teacher->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong for="status">Status</strong>       
                    <select  class="form-control" name="status" id="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        </select>
                </div>
               
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>  
            <a class="btn btn-danger btn-sm" href="{{ route('teacher.index') }}">Cancel</a> 
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

 
   