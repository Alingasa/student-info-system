<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function index(): View
    {
    
        
        $payments = Payment::with('enrollment')->get();
        return view('components.payment.index',compact('payments'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $payment = Enrollment::pluck('enrollment_no','id');
        return view('components.payment.create',compact('payment'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'enrollment_id' => 'required',
            'payable' => 'required',
            'refund' => 'required',
            'paid_date' => 'required',
            'paid' => 'required',
        ]);
        
        Payment::create($request->all());
         
        return redirect()->route('payment.index')
                        ->with('success','Payment Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Payment $payment): View
    {
        return view('components.payment.show',compact('payment'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment): View
    {
        $enrollment = Enrollment::pluck('enrollment_no','id');
        return view('components.payment.edit',compact('payment','enrollment'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment): RedirectResponse
    {
        $request->validate([
            'enrollment_id' => 'required',
            'payable' => 'required',
            'refund' => 'required',
            'paid_date' => 'required',
            'paid' => 'required',
        ]);
        
        $payment->update($request->all());
        
        return redirect()->route('payment.index')
                        ->with('success','Payment updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment): RedirectResponse
    {
        $payment->enrollment()->dissociate();
        $payment->save();
        $payment->delete();
         
        return redirect()->route('payment.index')
                        ->with('delete','Course deleted successfully');
    }
}
