<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tax\helpers\ImportTax;
use tax\models\Product;

class ImportTaxTest extends TestCase
{
     private $importTax;
     private $product;
    
    protected  function setUp(): void
    {
        $this->importTax = new ImportTax();
        $this->product = new Product();      
    }
    
    public function test_import_tax_for_local(): void{
                       
         $this->product->setName('book');
         $this->product->setCategory('BOOK'); 
         $this->product->setOrigin('LOCAL');
         $this->product->setQuantity(2);
         $this->product->setPrice(12.49);
        
        $this->assertEquals(0,
            $this->importTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    public function test_import_tax_for_imports(): void{
                       
         $this->product->setName('box of chocolates');
         $this->product->setCategory('FOOD'); 
         $this->product->setOrigin('IMPORT');
         $this->product->setQuantity(1);
         $this->product->setPrice(10);
        
        $this->assertEquals(5,
            $this->importTax->tax($this->product),
            "actual value is equals to expected"
        );        
    }
    
    

    
}


