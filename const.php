<?php

declare(strict_types=1);

use Beverage as GlobalBeverage;

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class Beverage{
    
    const BARNAME = "Het Vervolg";
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
}
$classname = "Beverage";
$cola = new Beverage('cola','black',2.5);
echo "<br> Display BARNAME Constant using <b> variable  </b>= "; 
echo $classname::BARNAME;


echo "<br/> Display BARNAME Constant using <b>class name = </b>". Beverage::BARNAME;
echo "<br/> Display BARNAME Constant using <b> class object and public function </b> = ";
$cola->showConstant();
?>
<br/><br/>
<button style="border:1px blue solid; padding:10px;" onclick="history.go(-1);">Back </button>
