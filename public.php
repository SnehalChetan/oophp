<?php

declare(strict_types=1);

use Beverage as GlobalBeverage;

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
class Beverage {
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold'){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo():string{
  
        return "This beverage is <b> $this->temperature </b> and <b> $this->color </b> and the price is <b> $this->price </b>";
    }
    public function changePrice(float $price) : string{
        if ($price > 0){
            $this->price = $price;
            return "price of <b>".$this->price;
        }
        return 'price can\'t be negetive or 0!';
    }
}

$cola = new GlobalBeverage('black',2.5);
echo $cola->getInfo();

echo "<br/> The cola is  at ". $cola->changePrice(3.5);


?>
<br/><br/>
<button style="border:1px blue solid; padding:10px;" onclick="history.go(-1);">Back </button>
