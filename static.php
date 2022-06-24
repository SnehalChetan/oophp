<?php

declare(strict_types=1);

use Beverage as GlobalBeverage;

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/
class Beverage{
    
    const BARNAME = "Het Vervolg";
    public static $address = "Melkmarkt 9, 2000 Antwerpen";
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    

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

    public function showConstant() {
        echo  self::BARNAME . "\n";
    }

    public function getStaticProperty(){
        return self::$address;
    }

}
class Beer extends Beverage{
    private string $beerName;
    private float $alcoholPercentage;

    public function __construct($color,$price,$beerName, $alcoholPercentage)
	{
		parent::__construct('beer',$color,$price);
        $this->beerName = $beerName;
        $this->alcoholPercentage = $alcoholPercentage;
    }
   public function getAlcoholPercentage():float{
        return $this->alcoholPercentage;
   }

   public function getParentStaticProperty(){
        return parent::$address;
   }
}
$classname = "Beverage";
$cola = new Beverage('cola','black',2.5);
echo "<br> Display BARNAME Constant using <b> variable  </b>= "; 
echo $classname::BARNAME;


echo "<br/> Display BARNAME Constant using <b>class name = </b>". Beverage::BARNAME;
echo "<br/> Display BARNAME Constant using <b> class object and public function </b> = ";
$cola->showConstant();


$Duvel = new Beer('blond',3.5,'duvel',8.5);

/**
 * display stataic property
 */

echo "<br/><br/><br/> Static property display using <b> class name </b>".Beverage::$address;
echo "<br/><br/> Display static property using a simple<b> public method and object </b> = ".$cola->getStaticProperty();
echo "<br/><br/> Display using <b> class name variable </b> = ".$classname::$address;
echo "<br/><br/> Display using <b> child class name  </b> = ".Beer::$address;
echo "<br/><br/> Display using <b> child class method and object  </b> = ".$Duvel->getParentStaticProperty();

/**
 * Q: what is return type of a function which returns static property?
 * Q: what is a return type of a function which returns constant property?
 * 
 * 
 */
?>
<br/><br/>
<button style="border:1px blue solid; padding:10px;" onclick="history.go(-1);">Back </button>
