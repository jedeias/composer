<?php

namespace Src\Core\UseCases;

use Src\Core\Entities\interfaceNote;

class Note implements InterfaceNote{
    private int $noteId;
    private string $title;
    private string $description;
    private int $statusId;
    private int $userId;
    
	public function getNoteId() : int {
		return $this->noteId;
	}
	
	public function setNoteId(int $noteId): self {
		$this->noteId = $noteId;
		return $this;
	}
	
	public function getTitle(): string {
		return $this->title;
	}
	
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}
	
	public function getDescription(): string {
		return $this->description;
	}
	
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}
	
	public function getStatusId(): int {
		return $this->statusId;
	}
	
	public function setStatusId(int $statusId): self {
		$this->statusId = $statusId;
		return $this;
	}
	
	public function getUserId(): int {
		return $this->userId;
	}
	
	public function setUserId(int $userId): self {
		$this->userId = $userId;
		return $this;
	}
}

?>