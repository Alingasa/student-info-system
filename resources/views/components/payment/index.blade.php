@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="fas fa-solid fa-users"></i>
                        Payment
                      
                        <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                   
                    </div>
                    @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12 text-right">
                        <a href="{{ route('payment.create') }}" class="btn btn-sm btn-primary">Add New Payment</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                @if($payments->count() > 0 )
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
                 
                  <table class="table table-bordered">
                      <tr class="user-row">
                          <th>No</th>
                          <th>ID</th>
                          <th>Student</th>
                          <th>Payable</th>
                          <th>Refund</th>
                          <th>Paid Date</th>
                          <th>Paid</th>
                          @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <th width="280px">Action</th>
                          @endif
                      </tr>
                      @foreach ($payments as $pay)
                      <tr>
                          <td>{{ ++$i }}</td>
                 
                          <td>{{ $pay->student->student_id }}</td>
                          <td>{{$pay->student->firstname . ' '}}{{$pay->student->lastname }}</td>
                          <td>{{ $pay->payable}}</td>
                          <td>{{ $pay->refund }}</td>
                          <td>{{ $pay->paid_date}}</td>
                          <td>{{ $pay->paid}}</td>
                        </td>
                          
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')

                          <td>
                              <form action="{{ route('payment.destroy',$pay->id) }}" method="POST" style="display: inline-block">
                 
                        
                                  <a class="btn btn-sm btn-primary" href="{{ route('payment.edit',$pay->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                
                              </form>
                              {{-- <a class="btn btn-sm btn-success" href="{{ route('payment.edit',$pay->id) }}">Print</a> --}}
                              <a class="btn btn-sm btn-warning" href="{{ route('payment.edit',$pay->id) }}">
                              <span class="material-symbols-outlined">
                                print
                                </span>
                            </a>
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
                  @else
                  <br>
                  <center><h5 class="text-danger">No Available Data</h5></center>
                  @endif
            </div>
          </div>
          @include('layout._footer')
    @endsection
    