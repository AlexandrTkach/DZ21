<?php
include 'User.php';

$user =new Log\User;

$ref = new ReflectionParameter(['Log\User', 'setData'], 0);

echo '<pre>' . print_r(get_class_methods($ref), true);
