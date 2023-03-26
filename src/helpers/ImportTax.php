<?php
namespace tax\helpers;

class ImportTax implements taxInterface{

    // sales tax rate as 5
    protected static $tax = 5;
    // taxable origin as "IMPORT"
    protected $taxableOrigin = "IMPORT";

    public function tax(object $product):float
    {
        // check import tax exception for product
        if($product->getOrigin() != $this->taxableOrigin){
            return 0;
        }
        
        // return import tax amount
       return self::$tax;


    }   

}