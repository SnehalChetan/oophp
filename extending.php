<?php 
/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
echo "Extending Exercise ";
?>
<br/>
<button class="btn border-primary" onclick="history.go(-1);">Back </button><br/><br/>
<?php
class Beverage{
    
    public string $name;
    public string $color;
    public float $price;
    public string $temperature;

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
//name (string) and alcoholPercentage (float).
    public string $beerName;
    public float $alcoholPercentage;
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

    $cola = new Beverage('cola','black',2);
    echo $cola->getInfo();
    echo "<br>Temparature of  $cola->name is ".$cola->temperature;
    //TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
    $Duvel = new Beer('blond',3.5,'duvel',8.5);
    echo "<br/>Alcohol percentage by using function = ".$Duvel->getAlcoholPercentage();
    echo "<br/>Alcohol percentage by accesing property name = ".$Duvel->alcoholPercentage;
    echo "<br/> try to generate error = <br/>".$cola->getAlcoholPercentage();
?>

