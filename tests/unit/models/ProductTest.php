<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tax\models\Product;

class ProductTest extends TestCase
{
    
    
    public function test_product_can_be_assign(): void{
                
        $product = new Product();
        
        $product->setName('book');
        $product->setCategory('BOOK'); 
        $product->setOrigin('LOCAL');
        $product->setQuantity(2);
        $product->setPrice(12.49);
        
        $this->assertEquals('book', $product->getName(), "actual value is equals to expected");        
        $this->assertEquals('BOOK', $product->getCategory(), "actual value is equals to expected");        
        $this->assertEquals('LOCAL', $product->getOrigin(), "actual value is equals to expected");        
        $this->assertEquals(2, $product->getQuantity(), "actual value is equals to expected");        
        $this->assertEquals(12.49, $product->getPrice(), "actual value is equals to expected");        
    }
    
    
    

    
}


