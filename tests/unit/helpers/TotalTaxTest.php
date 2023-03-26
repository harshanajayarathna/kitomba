<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tax\helpers\TotalTax;
use tax\models\Product;

class TotalTaxTest extends TestCase
{
     private $totalTax;
     private $product;
    
    protected  function setUp(): void
    {
        $this->totalTax = new TotalTax();
        $this->product = new Product();      
    }
    
    public function test_product_is_local_and_exceptional_category(): void{
                       
         $this->product->setName('Book');
         $this->product->setCategory('BOOK'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(2);
         $this->product->setPrice(12.49);
        
        $this->assertEquals(0,
            $this->totalTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    public function test_product_is_local_and_non_exceptional_category(): void{
                       
         $this->product->setName('Bottle of perfume');
         $this->product->setCategory('BEAUTY'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(1);
         $this->product->setPrice(18.99);
        
        $this->assertEquals(10,
            $this->totalTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    
    public function test_product_is_import_and_exceptional_category(): void{
                       
         $this->product->setName('box of imported chocolates');
         $this->product->setCategory('FOOD'); 
         $this->product->setOrigin('IMPORT');
         $this->product->setQuantity(2);
         $this->product->setPrice(12.49);
        
        $this->assertEquals(5,
            $this->totalTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    public function test_product_is_import_and_non_exceptional_category(): void{
                       
         $this->product->setName('imported bottle of perfume');
         $this->product->setCategory('BEAUTY'); 
         $this->product->setOrigin('IMPORT');
         $this->product->setQuantity(1);
         $this->product->setPrice(18.99);
        
        $this->assertEquals(15,
            $this->totalTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    
    

    
}


