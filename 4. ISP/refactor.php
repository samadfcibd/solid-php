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
 * Having lots of specific interfaces means that
 * we don't have to write code just to support an interface.
 */


/*
 * ISP Refactor
 */
interface PrinterInterface
{
    public function print();
}

interface PhotocopyInterface
{
    public function photocopy();
}

interface ScannerInterface
{
    public function scan();
}

// ISP refactors here
class DigitalPrinter implements PrinterInterface, PhotocopyInterface, ScannerInterface
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

// ISP refactors here
class ModernPrinter implements PrinterInterface, PhotocopyInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }
}

// ISP refactors here
class OldPrinter implements PrinterInterface
{
    public function print()
    {
        return 'print';
    }
}