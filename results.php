<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Nature Reserve</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="nature">
    <div class="middle">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['lion']) && empty($_POST['giraffe']) && empty($_POST['turtle'])){
        header('Location: index.php');
        exit;
    }


}
$numberOfLions = $_POST['lion'];
$numberOfGiraffes = $_POST['giraffe'];
$numberOfTurtles = $_POST['turtle'];


abstract class Animal{  
    protected $photo;
    
    
    abstract function makeSound();
    abstract function getPhoto();
    
}

class Lion extends Animal {
    function __construct($photo, $sound){
        $this->photo = $photo;
        $this->sound = $sound;
    }
    public function makeSound(){
        return $this->sound;
    }
    public function getPhoto(){
        return $this->photo;
    }

}
class Giraffe extends Animal {
    function __construct($photo, $sound){
        $this->photo = $photo;

        $this->sound = $sound;
    }
    public function makeSound(){
        return $this->sound;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function getName(){
        return $this->name;
    }

}
class Turtle extends Animal {
    function __construct($photo, $sound){
        $this->photo = $photo;
        $this->sound = $sound;
    }
    public function makeSound(){
        return $this->sound;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function getName(){
        return $this->name;
    }

}


$newLion = new Lion('<img src="lejon.png" onclick="sound()">', '<script> function sound(){ alert("RAWR") }</script>');
$showLion = $newLion->getPhoto() . $newLion->makeSound();

for ($i=0; $i < $numberOfLions; $i++) {
    echo $showLion;
    
}
$newGiraffe = new Giraffe('<img src="giraff.png" onclick="sound1()">','<script> function sound1(){ alert("WIIIÄÄÄÄ") }</script>');
$showGiraff = $newGiraffe->getPhoto() . $newGiraffe->makeSound();

for ($i=0; $i < $numberOfGiraffes; $i++) { 
    echo $showGiraff;
}
$newTurtle = new Turtle('<img src="sköldpadda.png" onclick="sound2()">', '<script> function sound2(){ alert("WAAAZUP") }</script>');
$showTurtle = $newTurtle->getPhoto() . $newTurtle->makeSound();

for ($i=0; $i < $numberOfTurtles; $i++) { 
    echo $showTurtle;
}
?>
    </div>
</body>
</html>












