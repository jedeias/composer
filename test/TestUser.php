<?php
use PHPUnit\Framework\TestCase;

use Src\Core\UseCases\User;

require ("vendor/autoload.php");

Class TestUser extends TestCase{

    protected $user;

    function setUp() : void {
        $this->user = new User();
    }
    
    function testInstanceOfUser() {
        $this->assertInstanceOf(User::class, $this->user);
    }

    function testSetAndGetUserId() {
        $userId = 12;
        $this->user->setUserId($userId);
        $this->assertEquals($userId, $this->user->getUserId());
    }

    function testSetAndGetName() {
        $name = "Jorge";
        $this->user->setUserName($name);
        $this->assertEquals($name, $this->user->getUserName());
    }

    function testSetAndGetPassword() {
        $password = "password";
        $this->user->setPassword($password);
        $this->assertEquals($password, $this->user->getPassword());
    }

    function testSetAndGetValidEmail() {
        $email = "email@example.com";
        $this->user->setEmail($email);
        $this->assertEquals($email, $this->user->getEmail());

    }

    function testSetInvalidEmail() {
        $invalidEmail = "invalid-email";
        $this->user->setEmail($invalidEmail);
        $this->assertEquals("email not valid", $this->user->getEmail());
    }
}

?>