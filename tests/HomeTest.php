<?php
use Futura\Home;

use Futura\Solid\OCP\Right\File;
use Futura\Solid\OCP\Right\Progress;

use Futura\Solid\LSP\Wrong\Rectangle;
use Futura\Solid\LSP\Wrong\Square;
use Futura\Solid\LSP\Wrong\Client;

use Futura\Solid\LSP\Right\Client as RightClient;

class HomeTest extends \PHPUnit_Framework_TestCase {

	public function getAdd() {
		return [
			[1,2,3],
			[4,5,6],
			[4,5,9]
		];
	}

	/**
	* @dataProvider getAdd
	*/
	public function testAdd($a, $b, $c) {
		$add = new Home;
		$test = $add->add($a, $b);
		//var_dump($test);
		$this->assertEquals($c, $test);
	}

	/**
	* Test Open Close Principle
	*/
	public function testItCanGetTheProgressOfAFileAsAPercent() {
	    $file = new File();
	    $file->setLength(200);
	    $file->setSent(100);

	    $progress = new Progress($file);

	    $this->assertEquals(50, $progress->getAsPercent());
	}

	public function addArea() {
		return [
			[ new Rectangle ],
			[ new Square ]
		];
	}

	/**
	* Test Wrong Liskov Substitution Principle
	* @dataProvider addArea
	*/
	public function testArea($r) {
		$c = new Client;
		$this->assertTrue($c->areaVerifier($r));
	}

	public function testAreaRight() {
		$c = new RightClient;
		$r = new Square;
		$this->assertTrue($c->areaVerifier())
	}

}
