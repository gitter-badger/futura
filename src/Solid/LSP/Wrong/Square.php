<?php 
namespace Futura\Solid\LSP\Wrong;

use Futura\Solid\LSP\Wrong\Rectangle;

class Square extends Rectangle {

	public function getHeight($value) {
		$this->width 	= $value;
		$this->height 	= $value;
	}

	public function getWidth($value) {
		$this->width 	= $value;
		$this->height 	= $value;
	}

}
?>