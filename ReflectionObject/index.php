<?php
include 'User.php';

$user =new Log\User;

$ref = new ReflectionObject($user);

echo '<pre>' . print_r(get_class_methods($ref), true);

