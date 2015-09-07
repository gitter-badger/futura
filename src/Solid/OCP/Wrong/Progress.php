<?php
namespace Futura\Solid\OCP\Wrong;

use Futura\Solid\OCP\Wrong\File;

class Progress {

	private $file;

	public function __construct(File $file) {
		$this->file = $file;
	}

	public function getAsPercent() {
		return $this->file->sent * 100 / $this->file->length;
	}

}
?>