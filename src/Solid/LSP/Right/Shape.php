<?php
namespace Futura\Solid\LSP\Right;

abstract class Shape {
	protected $height;
	protected $width;
	public abstract function getHeight();
	public abstract function getWidth();
	public abstract function setHeight($height);
	public abstract function setWidth($width);

	public function area() {
		return $this->width * $this->height;
	}
}
?>