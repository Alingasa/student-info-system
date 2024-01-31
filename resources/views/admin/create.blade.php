@extends('dashboard.homedashboard.home')

@section('content')
     <div class="card">
        <div class="card-header">
            Add new User <br>
          
        </div>
       <!-- Add this to your HTML head section -->


        @if ($errors->any())
       @include('layout.error')
    @endif
    

<form action="{{ route('admin.store') }}" enctype="multipart/form-data" method="POST">
@csrf

 <div class="row">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      
    </div>
   


   

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Choose Avatar</strong>
            <br>
            <input type="file" name="avatar" class="form-control-file">    
                </div>
</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong for="role">Role</strong>
                    
                        <select  class="form-control" name="role" id="role">
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                            <option value="Admin">Admin</option>
                            
                            </select>
                </div>
           
        <div class="form-group">
            <strong>User Id</strong>
            <input type="text" name="user_id" class="form-control" placeholder="User Id">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name</strong>
            <input type="text" name="firstname" class="form-control" placeholder="First Name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name</strong>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <strong for="status">Status</strong>
        
            <select  class="form-control" name="status" id="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                
                </select>
    </div>
        <div class="form-group">
            <strong>Password</strong>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       
        <div class="form-group">
            <strong > Confirm Password</strong>
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
        </div>


       
  
        <a class="btn btn-danger btn-sm" href="{{ route('admin.index') }}">Cancel</a>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
       
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
