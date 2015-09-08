<?php
namespace Futura\Solid\LSP\Right;

abstract class Shape {
	protected $height;
	protected $width;
	abstract public function getHeight();
	abstract public function getWidth();
	abstract public function setHeight($height);
	abstract public function setWidth($width);

	public function area() {
		return $this->width * $this->height;
	}
}
