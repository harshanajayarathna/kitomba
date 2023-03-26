<?php
namespace tax;
use tax\helpers\TotalTax;

class Receipt
{
    public $products;
    
    public function __construct($products)
    {
        $this->products = $products;
    }
    
    /**
     * generated the receipt with line items
     * @return string
     */
    public function generate(): string{
        
        $totalTax = new TotalTax();
        
        // total tax for products
        $taxTotal = 0;
        // gross total amount
        $grossTotal = 0;
        
        $items ="<ul>";
        
        foreach($this->products AS $cartItem)
        {            
            // total tax percentage
            $taxPercentage = $totalTax->tax($cartItem)/100;  
            
            // line item tax (tax for a product multiply with quantity)
            $taxAmount  = $this->calculateTax($cartItem, $taxPercentage)* $cartItem->getQuantity() ;
            $taxTotal += $taxAmount;
            
            // line item gross price (Gross price for product multiply with quantity)
            $grossPrice  = $this->calculateGrossPrice($cartItem, $taxPercentage) * $cartItem->getQuantity();
            $grossTotal += $grossPrice;    
                        
            $items .= "<li>{$cartItem->quantity} {$cartItem->name} : ".number_format($grossPrice, 2, '.', '')."</li>";

        }
        // sales taxes       
        $items .="<li>Sales Taxes: ".number_format($taxTotal, 2, '.', '')." </li>";
        // gross total
        $items .="<li>Total: ".number_format($grossTotal, 2, '.', '')." </li>";
      
        $items .="</ul>";
                
        return $items;        
    }
    
    
    
   /**
    * calculate the gross price per item
    * @param object $product
    * @param float $taxPercentage
    * @return float
    */
    public function calculateGrossPrice(object $product, float $taxPercentage ): float
    {        
        $grossPrice = $product->getPrice() * (1+$taxPercentage) ; 
        // round the value to upper with two decimals
        return round($grossPrice, 2, PHP_ROUND_HALF_UP);        
                
    }
    
    /**
     * calculate tax amount per item
     * @param object $product
     * @param float $taxPercentage
     * @return float
     */
    public function calculateTax(object $product, float $taxPercentage): float
    {        
        $taxAmount = $product->getPrice() * ($taxPercentage) ; 
        // round the value to upper with two decimals
        return round($taxAmount, 2, PHP_ROUND_HALF_UP);
    }
    
  
    
}

