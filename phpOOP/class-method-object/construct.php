<?php
class Person{
    //poperty
    public $name;
    public $age;

    //create construct method
    public function __construct($a, $b){
        echo "Constructor created.<br>";
        $this->name = $a;
        $this->age = $b;
    }
    public function personName(){
        // echo "Person name is :".$this->name;
        echo "First number".$this->name."<br>";
        echo "Last number".$this->age."</br>";
        echo "Summation is :".($this->name+$this->age); 
    }

    public function add(){

    }
}
//Object created
$personOne = new Person(12,34);
// $personOne->name="Razu";
$personOne->personName();
?>