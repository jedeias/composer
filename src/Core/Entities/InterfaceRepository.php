<?php

namespace Src\Core\Entities;


interface InterfaceRepository{
    public function findById(object $object);
    public function save(object $object);
    public function delete(object $object);
    public function update(object $object);
    
}

?>