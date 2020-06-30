<?php


/**
 * The main purpose of the ISP is:
 * Clients should not be forced to implement interfaces they do not use.
 *
 * This principle states that an interface should not enforce unwanted methods to a class.
 * The idea here is instead of having a large interface we should have smaller interfaces,
 * So we should not create an interface having a lot of methods
 * If we have such an interface we should break in into smaller interfaces.
 *
 *
 * Here, the PrinterInterface is a large interface, where we have declared some methods.
 * OldPrinter implements the PrinterInterface with all methods, but
 * photocopy() and scan() methods are totally unnecessary for OldPrinter machine.
 *
 * And we can't remove non-required methods because that's what the interface required.
 *
 */


/*
 * ISP Violation
 */

namespace ISP\Violation;

interface PrinterInterface
{
    public function print();

    public function photocopy();

    public function scan();
}


class DigitalPrinter implements PrinterInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }

    public function scan()
    {
        return 'Scan';
    }
}


class ModernPrinter implements PrinterInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }

    // ISP Violates here
    public function scan()
    {
        return 'Not supported';
    }
}


class OldPrinter implements PrinterInterface
{
    public function print()
    {
        return 'print';
    }

    // ISP Violates here
    public function photocopy()
    {
        return 'Not supported';
    }

    // ISP Violates here
    public function scan()
    {
        return 'Not supported';
    }
}