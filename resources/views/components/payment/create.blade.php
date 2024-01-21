@extends('dashboard.homedashboard.home')

@section('content')
@include('components.payment.jsdatepicker.header')
     <div class="card">
        <div class="card-header">
            Add new Payment <br>
          
        </div>
       
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('payment.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
{{--    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Enrollment No</strong>
            <select  class="form-control" name="enrollment_id" id="enrollment_id">
                       @foreach($payment as $id=>$enrollment_no)   
                <option value="{{$id}}">{{$enrollment_no}}</option>
                @endforeach
                </select>
        </div>
    </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Enrollment No</strong>
            <input type="text" class="form-control" name="student_search" id="student_search" list="studentsList">
            <datalist id="studentsList">
                @foreach($payment as $id => $name)   
                    <option value="{{ $name }}" data-id="{{ $id }}">
                @endforeach
            </datalist>
            <input type="hidden" name="enrollment_id" id="selected_student_id">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="payable">Payable</strong>
                <input type="text" name="payable" class="form-control" placeholder="Payable">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Refund</strong>
            <input type="text" name="refund" class="form-control" placeholder="Refund">
        </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="payable">Paid Date</strong>
                    <input type="text" name="paid_date" class="form-control" placeholder="Paid Date">
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid Date</strong>
                <input type="text" data-date-format="yyyy/mm/dd" id="datepicker" name="paid_date" class="form-control" placeholder="Paid Date">
            </div>
     </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="paid">Paid</strong>
                    <input type="text" name="paid" class="form-control" placeholder="Paid">
            </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('payment.index') }}">Cancel</a>
       
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            
       
    </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
   
 </div>
</div>
</form>
    </div> 

    @include('components.payment.jsdatepicker.script')

    @include('components.payment.jsscript.jscript')

@endsection 