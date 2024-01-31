<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 600px;
            width: 100%;
        }

        .card-header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .row {
            margin-bottom: 20px;
        }

        .col-md-6 {
            width: 50%;
            float: left;
        }

        .mb-4 {
            margin-bottom: 16px;
        }

        .btn-primary {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #ee1a1a;
        }

        .d-print-none {
            display: none;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
                background-color: #fff;
            }

            .d-print-none {
                display: block;
            }

            .card-footer {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h3>Payment Receipt</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <strong>Student ID:</strong> {{ $payment->student->student_id ?? '' }}
                    </div>
                    <div class="mb-4">
                        <strong>Student Name:</strong> {{ $payment->student->firstname . ' ' . $payment->student->lastname ?? '' }}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <strong>Payable:</strong> {{ $payment->payable }}
                    </div>
                    <div class="mb-4">
                        <strong>Refund:</strong> {{ $payment->refund }}
                    </div>
                    <div class="mb-4">
                        <strong>Paid Date:</strong> {{ $payment->paid_date }}
                    </div>
                    <div class="mb-4">
                        <strong>Paid:</strong> {{ $payment->paid }}
                    </div>
                </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary d-print" onclick="window.print()">Print</button>
              <a class="btn btn-danger" href="{{ route('payment.index') }}">Cancel</a>
          </div>
        </div>

      
    </div>
   
  
</body>

</html>
