<!DOCTYPE html>
<html>
<head>
<body>
<title></title>

<?php


class Animals{

    public $name;
    public $age;
    public $color;
    public $years;


public function __construct ($name,$age,$color)
   {
    $this->name=$name;
    $this->age=$age;
    $this->color=$color;
    
    }


public function Shoot(){

        echo $this->name." just got shot.<br><br>"; 
    }

    public function Jump(){

        echo $this->name. " is jumping!<br><br>";
    }

    public function Sound(){

        echo "This " .$this->color. " cat says: ". " Mjau!<br><br>";
    }


}


    class Cat extends Animals
    {  
        
       public $var = ".. and I am a cat. <br><br>";

       public function Talk(){
        echo $this->var;
       }
       
    
    }

    class Dog extends Animals
    {  
        public $fur;

        public function __construct($name, $age, $color, $fur)
        {
        $this->fur=$fur;
        parent::__construct($name, $age, $color);
        }

        
        
    
    }

    class Bird extends Animals
    {  
        
        
    
    }



$cat = New Cat("Elin", 18, "black");
$cat->Jump();  
$cat->Shoot();
$cat->Sound();
$cat->Talk();

echo $cat->name;
$catTwo = New Cat("Lisa", 4, "blå");
echo $catTwo->name;
echo $catTwo->age;
$catTwo->Jump();
$dog = New Dog("Lilo", 10, "grå", "smooth");
echo $dog->fur;
echo $dog->age;



?>

</body>
</html>
