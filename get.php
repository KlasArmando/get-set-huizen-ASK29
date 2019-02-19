<?php
class Product {
    public $name;
    public $price;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}


// ---------Producten------------//
$product1 = new Product('Koelkast');
$product2 = new Product('Droger');
$product3 = new Product('Wasmachine');




//---------Product prijzen-------//
$product1->setPrice($_POST['productprijs1']);
$product2->setPrice($_POST['productprijs2']);
$product3->setPrice($_POST['productprijs3']);


//---------------Date-----------//
echo "Datum: " . (new DateTime())->format('d-m-Y h:i:sa') . "<br>";
echo $product1->name . ": " . $product1->price . "<br>";
echo $product2->name . ": " . $product2->price . "<br>";
echo $product3->name . ": " . $product3->price . "<br>";


//--------------BTW 21%---------///
$totaalexc = $product1->price + $product2->price + $product3->price;
$totaalinc = $totaalexc * 0.21 + $totaalexc;
echo "Totaalprijs exc. btw: " . $totaalexc . "<br>";
echo "Totaalprijs inc. btw: " . $totaalinc;

?>


