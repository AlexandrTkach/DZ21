<?php
include 'User.php';

$user =new Log\User;

$ref = new ReflectionProperty('Log\User', 'data');

$ref->setAccessible(true);

echo '<pre>';

print_r($ref->getValue($user));

