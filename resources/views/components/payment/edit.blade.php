@extends('dashboard.homedashboard.home')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Payment
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


    <form action="{{ route('payment.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label >Student ID</label>
                        <input type="text" class="form-control" value="{{ $payment->student->student_id ?? '' }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" class="form-control" value="{{ $payment->student->firstname . ' ' . $payment->student->lastname ?? '' }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payable">Payable</label>
                        <input type="text" name="payable" class="form-control" value="{{ $payment->payable }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="refund">Refund</label>
                        <input type="text" name="refund" class="form-control" value="{{ $payment->refund }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="paid_date">Paid Date</label>
                        <input type="date" name="paid_date" class="form-control" value="{{ $payment->paid_date }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="paid">Paid</label>
                        <input type="text" name="paid" class="form-control" value="{{ $payment->paid }}">
                    </div>
                </div>

                <!-- Add other form fields... -->

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{ route('payment.index') }}">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
