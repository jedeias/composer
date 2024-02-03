<?php

namespace Src\Core\Entities;

interface InterfaceUser{
	
	function getUserId() : int;
	function getUsername() : string;
	function getPassword() : string;
	function getEmail() : string;
	function setUserId(int $userId) : self;
	function setUserName(string $userName) : self;
	function setPassword(string $password) : self;
	function setEmail(string $email) : self;

}

?>