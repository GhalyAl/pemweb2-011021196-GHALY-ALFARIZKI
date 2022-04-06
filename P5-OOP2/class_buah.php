<!DOCTYPE html>
<html>
<body>

<?php
class Buah {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Tomato extends Buah {
  public function message() {
    echo "Am I a Vegetable or Fruit? "; 
  }
}

$strawberry = new Tomato("Tomato", "red");
$strawberry->message();
$strawberry->intro();
?> 
</body>
</html>