<?php

namespace Src\Core\Entities;

interface InterfaceNote{

    public function setNoteId(int $note) : self;
    public function setTitle(string $title) : self;
    public function setDescription(string $description) : self;
    public function setStatusId(int $statusId) : self;
    public function setUserId(int $userId) : self;
    public function getNoteId() : int;
    public function getTitle() : string;
    public function getDescription() : string;
    public function getStatusId() : int;
    public function getUserId() : int;

}

?>