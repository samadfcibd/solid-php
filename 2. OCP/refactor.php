<?php

interface paymentInterface
{
    public function pay();
}

class payWithPaypal implements paymentInterface
{
    public function pay()
    {
        // TODO: Implement pay() method.
    }
}

class payWithCreditCard implements paymentInterface
{
    public function pay()
    {
        // TODO: Implement pay() method.
    }
}

class payWithWireTransfer implements paymentInterface
{
    public function pay()
    {
        // TODO: Implement pay() method.
    }
}

class PaymentService
{
    public function initialize($payment_type)
    {
        switch ($payment_type) {
            case 'Paypal':
                return new payWithPaypal();
                break;
            case 'Credit Card':
                return new payWithCreditCard();
                break;
            default:
                return new payWithWireTransfer();
        }
    }
}

class PaymentController
{
    public function pay(Request $request, PaymentService $paymentService)
    {
        $payment_type = $request->input('payment_type');
        // OCP refactor
        $payment = $paymentService->initialize();
        $payment->pay();
    }
}