## Requirements
To run this application, you will need to install php in your local machine.

## How to setup project

To download and run the repository, follow below steps.

```bash
# Clone this repository to your local development  (eg: xampp's htdocs )
$ git clone https://github.com/harshanajayarathna/kitomba

# run the apache in your local machine

# go to browser address and type http://localhost/kitomba/src/

# then you can see some kind of result (eg: input set 3)

# if you want to run the input set 1, comment the other input sets (2 and 3)

```
## Brief explanation of your design and assumptions
The project has 3 folders (src, tests, vendor). 
1. The src folder contains the actual implementation
2. The test folder contains the all the test files.
3. vendor folder contains phpunit library and other useful libraries.

At this moment we have two types of taxes (Sales tax & import tax). There for we need a interface for tax. Then I created an interface called "TaxInterface". Then I created two classes for "Sales tax -> SalesTax.php " and "Import tax -> ImportTax.php". Then I implemented the logic inside those two. There is another file called "TotalTax". Inside that, I'm summing those two taxes.  Assume, in future we need to introduce another tax type (eg: Environmental tax - The product will emit some gases, they will damage the environment.). Then we can easily integrate new tax type to this.
In "SalesTax.php" and ImportTax.php files, I set the tax rate as 10 & 5 respectively as static value, because tax rates do not change often.

I created a product.php file inside the models folder with getters and setters.

There is an another file inside the src folder called "index.php". It is the main file you need to run. To execute the generate method in "Receipt.php" file, you need to pass the array of objects to Receipt constructor. Then you need to call the generate method. 
Inside the "Receipt.php" file, there are two methods called "calculateGrossPrice" and "calculateTax".







