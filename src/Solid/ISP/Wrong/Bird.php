<?php
namespace Futura\Solid\ISP\Wrong;

use Futura\Solid\ISP\Wrong\Animal;

class Bird implements Animal {

	public function fly() {
		return "Bird can fly";
	}

	public function run() {
		return "Bird can run";
	}

    function example() {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}