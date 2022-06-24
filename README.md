# oophp
OOP - Object Orientated Programming 
 focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
 This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.


## Exercise 1 : classes 

create class with public properties.
##### syntax : 

```
class ClassName {
    // properties of class
    public $name;
//constructor function 
public function __construct(string $name){
    $this->name = $name;
}
    //methods of class
    public function methodName():returntype{

    }
}
```
#### class
* Collection of properties and methods
* To access these properties and methods you need object of class

#### Object
* Object is an instance or blueprint of a class

#### Constructor
* constructor called evry time a new object of class will be created or ininitialised.
* The constructor is always of public.
* object of class created or ininitialised using `new` keyword. 
* At the same time of initialisation of object the constructor will called and execute.
* In constructor you are assigning values to the properties using `this` keyword. 
* These values pass using or while object creation.
```php
public function __construct(string $name, string $color, float $price, string $temperature = 'cold')
{
    $this->name = $name;
}
```

#### Methods
* Whatever operation you want to perform on properties you are define it in methods.
* You need to declare the datatype of a return variable at method definition.
* If a method does not return anything then you need to use `void` 

#### Accessibility or access modifier 
* It gives control over accessing properties and methods of a class. 
* Public is default modifier if not mentioned.
* Public properties and methods can be accessed from anywhere or outside the class.
* private properties and methods can ONLY be accessed within the class
* protected properties and methods can be accessed withing the class,
    and the classed derived or it's child classes.

### Exercise 1 : Classes Description
* pass a default value 'cold' to a temperature parameter. 
* So if user didn't pass a value for the temperature parameter then the default value will be assigned to it.
*Also if user pass a value for temperature parameter then the default value will not be assigned to temperature.

### Link to code
* [Exercise 1 Classes](https://github.com/SnehalChetan/oophp/blob/main/classes.php "Exercise 1 Classes")

## Exercise 2 : Extending

### Inheritance 
* A class derives or inherit from another class.
* The child class will inherit all the public and protected properties and methods from the parent class. 
* Also the child class its own properties and methods.
* To inherit a class you need to use `extends` keyword and parent class name
```php
    class Beer extends Beverage {} 
```

### Accessing and Assigning values to parent constructor
* As child class extends or inherit the parent class it now able to access data from parent class.
* When we create the object of a child class at the same time, we need to provide values for the parent class properties and assign them by calling parent constructor in the constuctor method of child class.
    * To access the parent constructor you need to use `parent` keyword as,
```php
public function __construct($color,$price,$beerName, $alcoholPercentage)
{
    parent::__construct('beer',$color,$price);
    $this->alcoholPercentage = $alcoholPercentage;
}
```
   
### Exercise 2 : Extending Description
* Inherit the parent class Bevarage by child class Beer
* Provide all values for child and parent properties at the time of child object creation.
    `$Duvel = new Beer('blond',3.5,'duvel',8.5);`
* Create a getter method to get child class property value.
* Generate an error to understand ` parent class object can not access the child class properties as well as methods`.

## Exercise 3 : Private
* Constructor method can not be private.
* You can not access the private properties you need the public getter and setter methods.
* These methods can not be private, if though then you can not access them outside the class.

### Exercise 3 : Private Description
* Change access modifier of all properties of parent and child class from public to private.
* To access the private properties of class we need to add public getter and setter methods.
* By using these methods the child class also able to access the private properties of parent class.
* TO access the private property inside a class definition - inside method, php allows to access it as 
```php
$this->alcoholPercentage 
```
but try the same outside class definition it gives error and need getter method to access it as,
```php
$Duvel->getAlcoholPercentage(); 
```

## Exercise 4 : Protected
* The protected properties of a class can only be accessed outside by the class itself and it's direct child classes.
* Though we are using protected but still require the getter and setter methods to access the protected properties.


### Exercise 4 : Protected Description
* Change all prperties to protected and try to access them
* If you try to access protected properties you will get errors as,
>Error  :  Cannot access protected property 
* so instead 
```php
$Duvel->alcoholPercentage
    //  use 
$Duvel->getAlcoholPercentage(); 
``` 
to access it.
