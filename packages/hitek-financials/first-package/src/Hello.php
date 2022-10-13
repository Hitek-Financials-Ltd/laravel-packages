<?php
namespace HitekFinancials\FirstPackage;

class Hello{

    protected $name;

    public function __construct($name = "Kenneth Usiobaifo") { 
        $this->name = $name;
    }

    public function hello(){
        return "Hello ". $this->name." from the package class";
    }
}