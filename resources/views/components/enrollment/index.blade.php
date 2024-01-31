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
            <div class="table-responsive">
                @if($enrollments->count() > 0)
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
                
                  <table class="table table-bordered">
                      <tr>
                          <th>No</th>
                   
                           <th>Student ID</th>
                          <th>Course</th>
                          <th>Year</th>
                          <th>Semester</th>
                          <th>Student</th>
                          <th>Join Date</th>
                          <th>Fee</th>
                          <th width="280px">Action</th>
                      </tr>
                      @foreach($enrollments as $enrollment)
                      <tr class="user-row">
                          <td>{{ ++$i }}</td>
                          <!-- Other enrollment fields -->
                     
                            <td class="text-danger">{{ $enrollment->student->student_id ?? 'Student ID not available'}}</td>
                          <td>{{ $enrollment->course->name }}</td>
                          <td>{{ $enrollment->year. ' Year' }}</td>
                          <td>{{ $enrollment->semester}}</td>
                          <td>{{ $enrollment->student->firstname }} {{ $enrollment->student->lastname }}</td>
                          <td>{{$enrollment->join_date}}</td>
                          <td>{{$enrollment->fee}}</td>

                          <td>
                            
                              <form action="{{ route('enrollment.destroy',$enrollment->id) }}" method="POST">
    
                                  <a class="btn btn-sm btn-primary" href="{{ route('enrollment.edit',$enrollment->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                 
                                  <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#deleteModal_{{ $enrollment->id }}" >Delete</a>
                                        @include('components.enrollment.modal.deletemodal', ['enrollment' => $enrollment])
                              </form>
                          </td>
                        
                      </tr>
                      @endforeach
                  </table>
                  </table>
                  
              
                  @else
                  <br>
                  <center>
                    <h5 class="text-danger">No Available Data</h5>
                  </center>
                 @endif
            </div>
          </div>
          @include('components.enrollment.script.scriptjs')
          @include('layout._footer')
     
@endsection
