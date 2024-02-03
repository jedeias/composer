<?php

require ("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

use Src\Core\UseCases\CheckList;

class TestCheckList extends TestCase{
    public function testGetAndSetListId()
    {
        $checkList = new checkList();
        $listId = 42;

        $checkList->setListId($listId);

        $this->assertEquals($listId, $checkList->getListId());
    }

    public function testGetAndSetItem()
    {
        $checkList = new checkList();
        $item = "Buy";

        $checkList->setItem($item);

        $this->assertEquals($item, $checkList->getItem());
    }

    public function testGetAndSetStautsId()
    {
        $checkList = new checkList();
        $stautsId = 3;

        $checkList->setStautsId($stautsId);

        $this->assertEquals($stautsId, $checkList->getStautsId());
    }

    public function testGetAndSetNoteId()
    {
        $checkList = new checkList();
      
        $noteId = 7;

        $checkList->setNoteId($noteId);

        $this->assertEquals($noteId, $checkList->getNoteId());
    }
}

?>