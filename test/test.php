<?php

namespace Blog\Test;

class Person
{
    private $name  = 'jack maa';
    public $age = 27;
    public $gender = "male";

    public function getName()
    {
        return $this->name;
    }
    public function walk()
    {
        echo  "The person can walk";
    }

    public function deposit()
    {
        echo  "A person can depost in the wold bank";
    }

    public function clean()
    {
        echo "The person is cleaning the house";
    }
}

class User extends Person
{
    public function name()
    {
        echo $this->getName();
    }
}
