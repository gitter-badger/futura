<?php
namespace Futura\Solid\LSP\Wrong;

class Rectangle {
	private $topLeft;
	private $width;
	private $height;

	public function setHeight($height) {
		$this->height = $height;
	}

	public function setWidth($width) {
		$this->width = $width;
	}

	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

	function area() {
	    return $this->width * $this->height;
	}

}
?>