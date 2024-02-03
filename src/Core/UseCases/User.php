<?php

namespace Src\Core\UseCases;

use Src\Core\Entities\InterfaceUser;

class User implements interfaceUser{
    private int $userId;
    private string $userName;
    private string $password;
    private string $email;
    
	public function getUserId(): int {
		return $this->userId;
	}
	
	public function setUserId(int $userId): self {
		$this->userId = $userId;
		return $this;
	}
	
	public function getUserName(): string {
		return $this->userName;
	}
	
	public function setUserName(string $userName): self {
		$this->userName = $userName;
		return $this;
	}
	
	public function getPassword(): string {
		return $this->password;
	}
	
	public function setPassword(string $password): self {
		$this->password = $password;
		return $this;
	}
	
	public function getEmail(): string {
		return $this->email;
	}
	
	public function setEmail(string $email): self {
		
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = "email not valid";
            return $this;
        }

        $this->email = $email;
		return $this;
	}
}

?>