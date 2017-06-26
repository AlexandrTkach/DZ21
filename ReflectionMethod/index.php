<?php
include 'user.php';

$ref = new ReflectionMethod('Log\User', 'getData');

echo '<pre>' . print_r(get_class_methods($ref) , true);


