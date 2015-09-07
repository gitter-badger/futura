<?php
namespace Futura\Solid\DIP\Right;

use Futura\Solid\DIP\Right\Ebook;

class EbookReader {

	private $book

	public function __construct(Ebook $book) {
		$this->book = $book;
	}

	public function read() {
		$this->book->read();
	}
	
} 
?>