<?php

use Blog\Test\Person;

require_once './test.php';

$person = new Person();
$user  = new Person();

echo $person->getName() . "<br>";
echo $person->age . "<br>";

$person->walk();
$user->walk();

require_once '../models/blog.php';

use Blog\Models\Blogs;
use Blog\Test\User;

$blogs = new Blogs();

echo "<br>";
print_r($blogs->all());


echo "<br>";

$users = new User();

$users->name();
echo "<br>";

echo $users->walk();

echo "<br>";
echo $users->age;
