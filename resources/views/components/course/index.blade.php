@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="material-symbols-outlined">
                            list
                            </i>
                        
                    </div>
                    @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12 text-right">
                        <a href="{{ route('course.create') }}" class="btn btn-sm btn-primary">Add New Courses</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-body p-0">
              
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif
                  @if ($message = Session::get('delete'))
                  <div class="alert alert-danger">
                      <p>{{ $message }}</p>
                  </div>
              @endif
                  <table class="table table-bordered">
                      <tr>
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <th>No</th>
                          @endif
                          <th>Name</th>
                          <th>Description</th>
                    
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <th width="280px">Action</th>
                          @endif
                      </tr>
                      @foreach ($course as $courses)
                      <tr>
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>{{ ++$i }}</td>
                          @endif
                          <td>
                            @if( $courses->name == 'BSIT')
                            <span style="color:orange;"><b>{{ $courses->name }}</b></span>
                             @elseif( $courses->name == 'BSED-SS')
                               <span style="color: gray;"><b>{{ $courses->name}}</b></span> 
                            @elseif( $courses->name == 'BSED-MATH')
                            <span style="color: purple;"><b>{{ $courses->name}}</b></span> 
                            @else
                           <span style="color: blue;"><b>{{ $courses->name}}</b> </span> 
                            @endif
                        </td>
                          
                        
                            <td>{{ $courses->description }}</td>
                       
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>
                              <form action="{{ route('course.destroy',$courses->id) }}" method="POST">
                 
                            
                  
                                  <a class="btn btn-sm btn-primary" href="{{ route('course.edit',$courses->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                          </td>
                          @endif
                      </tr>
                      @endforeach
                  </table>
                  </table>
                  
                  @if(isset($user_name))
                    <div class="alert alert-success mb-0">
                      <strong>Success!</strong> {{ $user_name }}'s information has been successfully updated.
                    </div>
                  @endif
            </div>
          </div>

    @endsection
    