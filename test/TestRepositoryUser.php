<?php

require ("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

use Src\Core\UseCases\User;

use Src\Lib\Repository\RepositoryUser;


Class TestRepositoryUser extends TestCase{

    protected $user;
    protected $repositoryUser;

    // public function __construct() {

    // }
    
    public function setUp() : void {
        //$this->repositoryUser = new RepositoryUser();
        $this->user = new User();
        $this->user->setEmail("user@example.com");
        $this->user->setPassword("password");
        $this->user->setUserName("Test Guy");
    }


    public function testeSaveUser(){
        
    }
    
}

?>
