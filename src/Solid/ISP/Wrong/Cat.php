<?php
namespace Futura\Solid\ISP\Wrong;

use Futura\Solid\ISP\Wrong\Animal;
use Exception;

class Cat implements Animal {
    
	public function fly() {
		throw new Exception("Cat cannot fly", 1);
	}

	public function run() {
		// doing something
	}

}
?>