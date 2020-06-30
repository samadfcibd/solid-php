<?php

class PaymentService
{
    public function payWithPaypal()
    {
        // pay with paypal
    }

    public function payWithCreditCard()
    {
        // pay with credit card
    }

    public function payWithWireTransfer()
    {
        // pay with wire transfer
    }
}

class PaymentController
{
    public function pay(Request $request, PaymentService $paymentService)
    {
        $payment_type = $request->input('payment_type');

        // Here OCP violates !!!
        switch ($payment_type) {
            case 'Paypal':
                $response = $paymentService->payWithPaypal();
                break;
            case 'Credit Card':
                $response = $paymentService->payWithCreditCard();
                break;
            default:
                $response = $paymentService->payWithWireTransfer();
        }
        return $response;
    }
}