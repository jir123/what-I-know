<?php
    
    class Person {
        public $name;
        public $age;
        public $id;

        public function __construct($n,$a){
            $this->name = $n;
            $this->age = $a;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function __destruct(){
            if(!empty($this->id)){
                echo "Save the ID";
            }
        }
    }

    $personOne = new Person("Jahirul",25);
    $personOne->setId(12);
    unset($personOne);
?>