<?php

abstract class PaymentStatusService
{
    public abstract function getStatus($payment_id);
}

class CreditCardPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return 'Success';
    }
}

class SonaliPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return 'Success';
    }
}


// Object of super-class or parent-class
$payment_status = new \LSP\Enforced\CreditCardPaymentStatus();
$payment_status->getStatus(1);


// and the object of a sub-class which inherit the parent class should be replaceable
// without breaking the application.

$payment_status = new \LSP\Enforced\SonaliPaymentStatus();
$payment_status->getStatus(1);

// $payment_status->authorize();
// To achieve that, subclasses need to follow these rules:
// 1. Method signatures must match and accept equal no of the parameter as the base type
// 2. The return type of the method should match to a base type
// 3. Exception types must match to a base class