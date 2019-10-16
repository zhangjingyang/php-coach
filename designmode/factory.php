<?php

interface ClassFactory
{
    public function createClass(String $classname);
}

class ClassGenerator implements ClassFactory
{
    public function createClass(string $classname)
    {
        switch (strtolower($classname)) {
            case 'cat':
                return new Cat();
            case 'dog':
                return new Dog();
        }
    }
}

class Cat
{
    public function __construct()
    {
        echo 'miao';
    }
}

class Dog
{
    public function __construct()
    {
        echo 'wang';
    }
}

$creator = new ClassGenerator();
$bobcat = $creator->createClass('cat');
$snoopydog = $creator->createClass('dog');
