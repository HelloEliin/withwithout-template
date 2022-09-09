
<?php


class Animals{

    public $name;
    public $age;
    public $color;


public function __construct ($name,$age,$color)
   {
    $this->name=$name;
    $this->age=$age;
    $this->color=$color;
    
    }


public function Shoot(){

        echo $this->name." just got shot.<br>";
    }

    public function Jump(){

        echo "A " .$this->color." ".$this->name. " is jumping!";
    }

    public function Sound(){

        echo "This " .$this->color. " cat says: ". " Mjau!";
    }

}


    class Cat extends Animals
    {  
        
       public $var = ".. and I am a cat. ";

       public function Talk(){
        echo $this->var;
       }
       
    
    }

    class Dog extends Animals
    {  
        public $var = ".. and im a dog.";

        public function Talk(){
            echo $this->var;
        }
    
    }

    class Bird extends Animals
    {  
        public $var = ".. and im a bird.";

        public function Talk(){
            echo $this->var;
        }
        
    
    }






$cat = New Cat("Elin", 18, "black");
$cat->Jump();  
$cat->Shoot();
$cat->Sound();
$cat->Talk();

$bird = New Bird("Loke", 6, "vit");
$bird->Jump();
$bird->Talk();






//4b






?>