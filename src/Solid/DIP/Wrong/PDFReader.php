<?php
namespace Futura\Solid\DIP\Wrong;

use Futura\Solid\DIP\Wrong\PDFBook;

class PDFReader {

	private $book;

	public function __construct(PDFBook $book) {
		$this->book = $book;
	}

	public function read() {
		return $this->book->read();
	}

}