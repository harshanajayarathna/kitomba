<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tax\models\Product;
use tax\Receipt;

class ReceiptTest extends TestCase
{
    
    
    public function test_product_gross_price_per_item(): void{
                
        $product = new Product();
        
        $product->setName('book');
        $product->setCategory('BOOK'); 
        $product->setOrigin('LOCAL');
        $product->setQuantity(2);
        $product->setPrice(12.49);
        
        $Receipt = new Receipt([$product]);
        
        $expectedGrossPrice = round((12.49*1.1), 2, PHP_ROUND_HALF_UP);   
        
        $this->assertEquals($expectedGrossPrice, $Receipt->calculateGrossPrice($product, 0.1));                 
    }
    
    public function test_product_tax_amount_per_item(): void{
                
        $product = new Product();
        
        $product->setName('book');
        $product->setCategory('BOOK'); 
        $product->setOrigin('LOCAL');
        $product->setQuantity(2);
        $product->setPrice(12.49);
        
        $Receipt = new Receipt([$product]);
        
        $expectedGrossPrice = round((12.49*0.1), 2, PHP_ROUND_HALF_UP);   
        
        $this->assertEquals($expectedGrossPrice, $Receipt->calculateTax($product, 0.1));
                 
    }
    
    
    

    
}


