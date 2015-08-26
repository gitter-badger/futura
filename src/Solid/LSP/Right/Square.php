<?php
namespace Futura\Solid\LSP\Right;

use Futura\Solid\LSP\Right\Shape;

class ClassName extends Shape
{
	
	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

	public function setWidth($width) {
		$this->setWidthAndHeight($width);
	}

	public function setHeight($height) {
		$this->setWidthAndHeight($height);
	}

	public function setWidthAndHeight($value) {
		$this->width = $value;
		$this->height = $value;
	}

}
?>