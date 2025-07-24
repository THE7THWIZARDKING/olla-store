<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Show payment form
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    // Process payment request
    public function processPayment(Request $request)
    {
        $orderId = uniqid();  // Generate unique order ID
        $amount = 1000;        // Example amount, dynamically pass based on order

        // Prepare the data to send to eSewa
        $paymentData = [
            'tAmt' => $amount,    // Total amount
            'amt'  => $amount,    // Actual amount
            'txAmt' => 0,         // Transaction fee (if any)
            'psc'  => 0,          // PSC
            'pdc'  => 0,          // PDC
            'scd'  => env('ESEWA_MERCHANT_ID'),  // Your Merchant ID
            'pid'  => $orderId,   // Unique order ID
            'su'   => route('payment.success'),  // Success URL
            'fu'   => route('payment.failure')   // Failure URL
        ];

        // Send data to eSewa payment gateway
        return view('payment.form', compact('paymentData'));
    }

    // Handle success response
    public function handleSuccess(Request $request)
    {
        // Verify payment and update order status
        // Perform your business logic, such as saving order details, updating status, etc.
        return redirect()->route('order.complete')->with('status', 'Payment successful!');
    }

    // Handle failure response
    public function handleFailure(Request $request)
    {
        // Handle failure case and notify user
        return redirect()->route('order.failed')->with('status', 'Payment failed. Please try again.');
    }
}
