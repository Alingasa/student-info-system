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
                        <a href="{{ route('course.create') }}" class="btn btn-sm btn-primary">Add Course</a>
                    </div>
                    @endif
                </div>
            </div>
            
        <div class="table-responsive">
            <div class="card-body p-0">
              @if($course->count() > 0 )
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
                  
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
                            <span class="text-warning"><b>{{ $courses->name }}</b></span>
                             @elseif( $courses->name == 'BSED-SS')
                               <span class="text-secondary"><b>{{ $courses->name}}</b></span> 
                            @elseif( $courses->name == 'BSED-MATH')
                            <span class="text-info"><b>{{ $courses->name}}</b></span> 
                            @else
                           <span class="text-primary"><b>{{ $courses->name}}</b> </span> 
                            @endif
                        </td>
                          
                        
                            <td>{{ $courses->description }}</td>
                       
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>
                              <form action="{{ route('course.destroy',$courses->id) }}" method="POST">
                 
                            
                  
                                  <a class="btn btn-sm btn-primary" href="{{ route('course.edit',$courses->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#deleteModal_{{ $courses->id }}" >Delete</a>
                                  @include('components.course.modal.deletemodal', ['courses' => $courses])
                              </form>
                          </td>
                          @endif
                      </tr>
                      @endforeach
                  </table>
                  </table>
                  <nav aria-label="...">
                    <ul class="pagination">
                      
                      {{ $course->links() }}
                    </ul>
                  </nav>
                 
                 
                  @else
                 <center>
                    <br>
                    <h5 class="text-danger">No Data Available</h5>
                 </center>
                 @endif
            </div>
          </div>
          @include('layout._footer')
    @endsection
    