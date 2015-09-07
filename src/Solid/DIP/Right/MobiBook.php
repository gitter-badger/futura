<?php
namespace Futura\Solid\DIP\Right;

use Futura\Solid\DIP\Right\Ebook;

class MobiBook implements Ebook {

	public function read() {
		return "Reading a mobi book";
	}

}
?>