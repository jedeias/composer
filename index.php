<?php

require ("vendor/autoload.php");

use Src\App\User;

$user = new User();

echo $user->create();

?>