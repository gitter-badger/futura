<?php
namespace Futura\Solid\LSP\Right;

 abstract class Shape {
 	protected $height;
 	protected $width;
	public abstract function getHeight();
	public abstract function getWidth();
	public abstract function setHeight();
	public abstract function setWidth();
}
?>