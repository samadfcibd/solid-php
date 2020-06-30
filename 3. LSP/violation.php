<?php

abstract class PaymentStatusService
{
    public abstract function getStatus($payment_id);
}

class CreditCardPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return 'success';
    }
}

class SonaliPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return ['status' => 'success'];
    }
}


// Object of super-class or parent-class
$payment_status = new \LSP\Violation\CreditCardPaymentStatus();

$payment_status->getStatus(1);


// and the object of a sub-class which inherit the parent class should be substitutable or replaceable
// without breaking the application.

$payment_status = new \LSP\Violation\SonaliPaymentStatus();

$payment_status->getStatus(1);
// Here the LSP violates !!!
// The object of CreditCardPaymentStatus is not replaceable directly with
// the object of SonaliPaymentStatus. Because, for SonaliPaymentStatus, getStatus method will return
// array data and we have modify the result processing functionality right now.
// So, we can't replace the CreditCardPaymentStatus object directly with the SonaliPaymentStatus object.