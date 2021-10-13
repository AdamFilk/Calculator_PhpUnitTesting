<?php
namespace App\Model;

class User
{
    public $first_name;
    public $last_name;

    public function setFirstName($name){
        $this->first_name = $name;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function setLastName($name){
        $this->last_name = $name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getFullName(){
        return "$this->first_name $this->last_name";
    }
}