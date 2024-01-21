@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="material-symbols-outlined">
                            list
                        
                            </i>
                            @if (count($subject) > 10)
                            <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                        @endif
                 
                    </div>
                    @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12 text-right">
                        <a href="{{ route('subject.create') }}" class="btn btn-sm btn-primary">Add New Subject</a>
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
                          <th>Course</th>
                          <th>Date Started</th>
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <th width="280px">Action</th>
                          @endif
                      </tr>
                      @foreach ($subject as $sub)
                      <tr  class="user-row">
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>{{ ++$i }}</td>
                           @endif
                          <td>{{ $sub->name }}</td>
                          <td>{{ $sub->course->name }}</td>
                          <td>{{ $sub->start_date }}</td>
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>
                              <form action="{{ route('subject.destroy',$sub->id) }}" method="POST">
                 
                  
                                  <a class="btn btn-sm btn-primary" href="{{ route('subject.edit',$sub->id) }}">Edit</a>
                 
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
          @include('components.subject.jsearch.js')
@endsection
