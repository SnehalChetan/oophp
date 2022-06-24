<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage{
    
    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = 'cold')
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo():string{
        return "This beverage is $this->temperature and $this->color  ";
    }
}
class Beer extends Beverage{
    protected string $beerName;
    protected float $alcoholPercentage;

    public function __construct($color,$price,$beerName, $alcoholPercentage)
	{
		parent::__construct('beer',$color,$price);
        $this->beerName = $beerName;
        $this->alcoholPercentage = $alcoholPercentage;
    }
   public function getAlcoholPercentage():float{
        return $this->alcoholPercentage;
   }
}

    
    $Duvel = new Beer('blond',3.5,'duvel',8.5);
    echo "<br/>Alcohol percentage by using function = ".$Duvel->getAlcoholPercentage();
    //echo "<br/>Alcohol percentage by accesing property name = ".$Duvel->alcoholPercentage;
    /**
     * you can not or may not access the protected property directly. Need to use getter methods.
     * if you try , Error  :  Cannot access protected property so instead ' $Duvel->alcoholPercentage' use $Duvel->getAlcoholPercentage(); to access it.
     */

?>
<br/><br/>
<button style="border:1px blue solid; padding:10px;" onclick="history.go(-1);">Back </button>