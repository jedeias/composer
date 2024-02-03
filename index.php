<?php

require ("vendor/autoload.php");

use Src\Middleware\User;

$user = new User();

$user->setUserName("name");

echo $user->getUserName();

?>