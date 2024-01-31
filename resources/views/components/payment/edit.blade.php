@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Payment
        </div>
    
    @if ($errors->any())
 @include('layout.error')
@endif

<form action="{{ route('payment.update',$payment->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Enrollment No</strong>
            <select  class="form-control" name="enrollment_id" id="enrollment_id">
                       @foreach($enrollment as $id=>$enrollment_no)   
                <option value="{{$id}}">{{$enrollment_no}}</option>
                @endforeach
                </select>
        </div>
    </div>
       
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="payable">Payable</strong>
                <input type="text" name="payable" value="{{ $payment->payable }}" class="form-control" placeholder="Payable">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Refund</strong>
            <input type="text" name="refund" value="{{ $payment->refund }}" class="form-control" placeholder="Refund">
        </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="payable">Paid Date</strong>
                    <input type="text" name="paid_date" value="{{ $payment->paid_date }}" class="form-control" placeholder="Paid Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="payable">Paid</strong>
                    <input type="text" name="paid" value="{{ $payment->paid }}"  class="form-control" placeholder="Paid">
            </div>
        
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>  
            <a class="btn btn-danger btn-sm" href="{{ route('payment.index') }}">Cancel</a> 
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

 
   