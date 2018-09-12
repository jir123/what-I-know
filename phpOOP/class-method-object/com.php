<?php
    //Class 
    class Person{
            //property
            public $name;
            public $age;

            //method
            public function persinoName(){
                echo "Person Name is:".$this->name;//$this hold the reference of the selected object in use, -> is an operator used to assign a method or property to an object references. $this gives you access to the object variables.

            }

            public function persionAge($value){
                echo "<br/>Person Age is :".$this->age = $value;
            }
                    
    }

    //object
    $persionOne = new Person;

    //access to method
     $persionOne->name="Jahirul Islam Razu";//here '->'is used to assecc instance/object members and it's official name  "object operator".
    $persionOne->persinoName();

    $persionOne->persionAge("18");
?>