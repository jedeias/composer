<?php

namespace Src\Core\Entities;

interface InterfaceCheckList{
    public function setListId(int $listId) : self;
    public function getListId() : int;
    public function setItem(string $listId) : self;
    public function getItem() : string;
    public function setStatus(string $status) : self;
    public function getStatus() : string;
    public function setNoteId(int $noteId) : self;
    public function getNoteId() : int;
}


?>