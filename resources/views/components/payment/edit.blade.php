@extends('dashboard.homedashboard.home')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Payment
    </div>

    @if ($errors->any())
    @include('layout.error')
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
                        <input type="text" name="payable" class="form-control @error('payable') is-invalid @enderror" value="{{ $payment->payable }}">
                        @error('payable')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="refund">Refund</label>
                        <input type="text" name="refund" class="form-control @error('refund') is-invalid @enderror" value="{{ $payment->refund }}">
                        @error('refund')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="paid_date">Paid Date</label>
                        <input type="date" name="paid_date" class="form-control @error('paid_date') is-invalid @enderror" value="{{ $payment->paid_date }}">
                        @error('paid_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="paid">Paid</label>
                        <input type="text" name="paid" class="form-control @error('paid') is-invalid @enderror" value="{{ $payment->paid }}">
                        @error('paid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
