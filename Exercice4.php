<?php 
class cat{
    private $name;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        if(strlen($name) > 3 AND strlen($name) < 20){
            $this->name = $name;}else{
                echo "error";
            }
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function setAge($age){
        if(int ($age)){
            $this->age = $age;}else{
                echo "error";
            }
    }
    
    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        if(strlen($color) > 3 AND strlen($name) < 10){
            $this->color = $color;}else{
                echo "error";
            }
    }
    
    public function getSex(){
        return $this->sex;
    }
    
    public function setSex($sex){
        if($sex == "male" OR $sex == "female"){
            $this->sex = $sex;}else{
                echo "error";
            }
    }
    
    public function getRace(){
        return $this->race;
    }
    
    public function setRace($race){
        if(strlen($race) > 3 AND strlen($race) < 20){
            $this->race = $race;}else{
                echo "error";
            }
    }
    
    public function __construct ( $name, $age, $color, $sex, $race ) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->race = $race;
    }
    
    public function getInfo(){
        $array = [];
        $array[] = $name;
        $array[] = $age;
        $array[] = $color;
        $array[] = $sex;
        $array[] = $race;
        return $array;
    }
    
}