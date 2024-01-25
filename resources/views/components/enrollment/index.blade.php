@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="fas fa-solid fa-users"></i>
                        Enrollment Application
                        @if (count($enrollments) > 10)
                        <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                    @endif
                    </div>
                   
                    <div class="col-md-6 col-12 text-right">
                        <a href="{{ route('enrollment.create') }}" class="btn btn-sm btn-primary">Enroll Now!</a>
                    </div>
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
                          <th>No</th>
                   
                          <th>Subject</th>
                          <th>Course</th>
                          <th>Student</th>
                          <th>Teacher</th>
                          <th>Join Date</th>
                          <th>Fee</th>
                          <th width="280px">Action</th>
                      </tr>
                      @foreach($enrollments as $enrollment)
                      <tr class="user-row">
                          <td>{{ ++$i }}</td>
                          <!-- Other enrollment fields -->
                     
                          <td>{{ $enrollment->subject->name }}</td>
                          <td>{{ $enrollment->course->name }}</td>
                          <td>{{ $enrollment->student->firstname }} {{ $enrollment->student->lastname }}</td>
                          <td>{{ $enrollment->teacher->firstname }} {{ $enrollment->teacher->lastname }}</td>
                          <td>{{$enrollment->join_date}}</td>
                          <td>{{$enrollment->fee}}</td>

                          <td>
                            
                              <form action="{{ route('enrollment.destroy',$enrollment->id) }}" method="POST">
    
                                  <a class="btn btn-sm btn-primary" href="{{ route('enrollment.edit',$enrollment->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                          </td>
                        
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
          @include('components.enrollment.script.scriptjs')
     
@endsection
