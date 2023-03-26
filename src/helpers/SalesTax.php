<?php
namespace tax\helpers;

class SalesTax implements taxInterface{

    // sales tax rate as 10
    protected static $tax = 10;
    // list of exceptional categories
    protected $exceptionCategories = ["BOOK", "FOOD", "MEDICAL"];

    /**
     * calculate correct sales tax for product
     * @param object $product
     * @return float
     */
    public function tax(object $product):float
    {
        // check sales tax exception for product
        if(in_array($product->getCategory(), $this->exceptionCategories)){
            return 0;
        }
        
        // return sales tax amount
        return self::$tax;
    }
 
}