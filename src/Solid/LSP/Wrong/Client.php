<?php
namespace Futura\Solid\LSP\Wrong;

use \Exception;
use Futura\Solid\LSP\Wrong\Rectangle;

class Client {

	public function areaVerifier(Rectangle $r) {
		$r->setHeight = 5;
		$r->setWidth  = 4;

		if ($r->area() != 20 ) {
			throw new Exception("Bad area!");	
		}

		return true;
	}

}