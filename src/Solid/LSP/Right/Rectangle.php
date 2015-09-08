<?php
namespace Futura\Solid\LSP\Right;

use Futura\Solid\LSP\Wrong;

class Rectangle extends Shape {
	
	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

	public function setWidth($width) {
		$this->width = $width;
	}

	public function setHeight($height) {
		$this->height = $height;
	}

}
