<?php
namespace Futura\Solid\DIP\Right;

use Futura\Solid\DIP\Right\Ebook;

class PDFBook implements Ebook {
	
	public function read() {
		return "Reading a PDF book";
	}

}
?>