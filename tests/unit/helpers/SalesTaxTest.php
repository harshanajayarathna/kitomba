<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tax\helpers\SalesTax;
use tax\models\Product;
/**
 * @covers SalesTax::methodName
 */
class SalesTaxTest extends TestCase
{
     private $salesTax;
     private $product;
    
    protected  function setUp(): void
    {
        $this->salesTax = new SalesTax();
        $this->product = new Product();      
    }
    
    public function test_sales_tax_for_exception_category_book(): void{
                       
         $this->product->setName('book');
         $this->product->setCategory('BOOK'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(2);
         $this->product->setPrice(12.49);
        
        $this->assertEquals(0,
            $this->salesTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    public function test_sales_tax_for_exception_category_food(): void{
                       
         $this->product->setName('chocolate');
         $this->product->setCategory('FOOD'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(2);
         $this->product->setPrice(0.85);
        
        $this->assertEquals(0,
            $this->salesTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    public function test_sales_tax_for_exception_category_medical(): void{
                       
         $this->product->setName('packet of headache pills');
         $this->product->setCategory('MEDICAL'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(1);
         $this->product->setPrice(9.75);
        
        $this->assertEquals(0,
            $this->salesTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    
    public function test_sales_tax_for_non_exception_category_music(): void{
                       
         $this->product->setName('music cd');
         $this->product->setCategory('MUSIC'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(2);
         $this->product->setPrice(14.99);
        
        $this->assertEquals(
            10,
            $this->salesTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    

    
}


