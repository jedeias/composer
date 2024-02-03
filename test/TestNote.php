<?php
use PHPUnit\Framework\TestCase;

use Src\Core\UseCases\Note;

require ("vendor/autoload.php");

class TestNote extends TestCase{

    protected $note;
    
    final public function setUp() : void {
        $this->note = new Note();
    }

    final public function testInstaceOfNote() : void {
        $this->assertInstanceOf(Note::class, $this->note);
    }

    final public function testSetNoteId() : void {
        $noteId = 3;
        $this->note->setNoteId($noteId);
        $this->assertEquals($noteId, $this->note->getNoteId());
    }

    final public function testSetTitle() : void {
        $title = "titulo";
        $this->note->setTitle($title);
        $this->assertEquals($title, $this->note->getTitle());
    }

    final public function testSetDescription() : void {
        $description = "descrição";
        $this->note->setDescription($description);
        $this->assertEquals($description, $this->note->getDescription());
    }

    final public function testSetStatusId() : void {
        $statusId = 1;
        $this->note->setStatusId($statusId);
        $this->assertEquals($statusId, $this->note->getStatusId());
    }

    final public function testSetUserId() : void {
        $userId = 2;
        $this->note->setUserId($userId);
        $this->assertEquals($userId, $this->note->getUserId());
    }

}

?>