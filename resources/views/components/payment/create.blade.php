@extends('dashboard.homedashboard.home')

@section('content')

     <div class="card">
        <div class="card-header">
            Add new Payment <br>
          
        </div>
       
@if ($errors->any())
@include('layout.error')
@endif

<form action="{{ route('payment.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 

 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="student_select"><strong>Student</strong></label>
            <select class="form-control" name="student_id" id="student_select">
                <option value="">Select Student</option>
                @foreach($payment as $id => $name)   
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="payable">Payable</strong>
                <input type="text" name="payable" class="form-control @error('payable') is-invalid @enderror" placeholder="Payable">
                @error('payable')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Refund</strong>
            <input type="text" name="refund" class="form-control @error('refund') is-invalid @enderror" placeholder="Refund">
            @error('refund')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid Date</strong>
                <input type="date" name="paid_date" class="form-control @error('paid_date') is-invalid @enderror" placeholder="Paid Date">
                @error('paid_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
     </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="paid">Paid</strong>
                    <input type="text" name="paid" class="form-control @error('paid') is-invalid @enderror" placeholder="Paid">
                    @error('paid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('payment.index') }}">Cancel</a>
       
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            
       
    </div>
    </div>
   
   
 </div>
</div>
</form>
    </div> 

  

    @include('components.payment.jsscript.jscript')

@endsection 