@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    @if(auth()->user()->role == "Admin" || auth()->user()->role == "Teacher")
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
                          
                          <th width="280px">Action</th>
                       
                      </tr>
                      @foreach ($payments as $pay)
                      <tr>
                          <td>{{ ++$i }}</td>
                 
                          <td class="text-danger">{{ $pay->student->student_id ?? 'Student ID not available' }}</td>
                          <td>{{$pay->student->firstname . ' '}}{{$pay->student->lastname }}</td>
                          <td>{{ $pay->payable}}</td>
                          <td>{{ $pay->refund }}</td>
                          <td>{{ $pay->paid_date}}</td>
                          <td>{{ $pay->paid}}</td>
                        </td>
                          
                   

                          <td>
                              <form action="{{ route('payment.destroy',$pay->id) }}" method="POST" style="display: inline-block">
                 
                        
                                  <a class="btn btn-sm btn-primary" href="{{ route('payment.edit',$pay->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                                  <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#deleteModal_{{ $pay->id }}" >Delete</a>
                                  @include('components.payment.modal.deletemodal', ['pay' => $pay])
                             

                                
                              </form>
                              {{-- <a class="btn btn-sm btn-success" href="{{ route('payment.edit',$pay->id) }}">Print</a> --}}
                              <a class="btn btn-sm btn-warning" href="{{ route('payment.print',$pay->id) }} ">
                              <span class="material-symbols-outlined">
                                print
                                </span>
                            </a>
                          </td>
                        
                        
                      </tr>
                      @endforeach
                  </table>
                  </table>
                  
                
                  @else
                  <br>
                  <center><h5 class="text-danger">No Available Data</h5></center>
                  @endif
                  @else
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h4 class="text-primary">Payment</h4>
                            </div>
                            <div class="mb-4">
                                <p><strong>12 Unit(s) Lecture X ₱ 400.00</strong></p>
                                <p class="text-muted">₱ 4,800.00</p>
                            </div>
                            <div class="mb-4">
                                <p><strong>15 Unit(s) Laboratory X ₱ 500.00</strong></p>
                                <p class="text-muted">₱ 7,500.00</p>
                            </div>
                            <div class="mb-4">
                                <p><strong>Total Tuition:</strong></p>
                                <p class="text-success">₱ 12,300.00</p>
                            </div>
                            <div class="mb-4">
                                <p><strong>Miscellaneous:</strong></p>
                                <p class="text-warning">₱ 3,000.00</p>
                            </div>
                            <div class="mb-4">
                                <p><strong>Grand Total:</strong></p>
                                <p class="text-danger">₱ 15,300.00</p>
                            </div>
                           <span class="badge badge-warning ml-2">Fully Paid</span>
                        </div>
                    </div>
                </div>
            
                
                
                  @endif
            </div>
          </div>
          @include('layout._footer')
    @endsection
    