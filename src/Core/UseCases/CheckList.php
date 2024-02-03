<?php

namespace Src\Core\UseCases;

use Src\Core\Entities\InterfaceCheckListInterface;

class checkList{
   
    private int $listId;
    private string $item;
    private int $stautsId;
    private int $noteId;

	public function getListId(): int {
		return $this->listId;
	}
	
	public function setListId(int $listId): self {
		$this->listId = $listId;
		return $this;
	}
	
	public function getItem(): string {
		return $this->item;
	}
	
	public function setItem(string $item): self {
		$this->item = $item;
		return $this;
	}
	
	public function getStautsId(): int {
		return $this->stautsId;
	}
		
	public function setStautsId(int $stautsId): self {
		$this->stautsId = $stautsId;
		return $this;
	}
	
	public function getNoteId(): int {
		return $this->noteId;
	}
	
	public function setNoteId(int $noteId): self {
		$this->noteId = $noteId;
		return $this;
	}
}

?>