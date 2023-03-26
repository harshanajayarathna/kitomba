<?php
namespace tax\helpers;

class TotalTax implements taxInterface{
    
    protected $salesTax;
    protected $importTax;
    
    public function __construct( )
    {
        $this->salesTax = new SalesTax();
        $this->importTax = new ImportTax();
    }
    /**
     * calculate the total tax rate for product
     * @param object $product
     * @return float
     */
    public function tax(object $product):float
    {        
        return $this->salesTax->tax($product)+ $this->importTax->tax($product);
        
    }
    
}
