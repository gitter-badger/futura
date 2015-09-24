<?php
use Futura\Home;

use Mockery as m;

use Futura\Solid\OCP\Right\File;
use Futura\Solid\OCP\Right\Progress;

use Futura\Solid\LSP\Wrong\Rectangle;
use Futura\Solid\LSP\Wrong\Square;
use Futura\Solid\LSP\Wrong\Client;

use Futura\Solid\LSP\Right\Client as RightClient;
use Futura\Solid\LSP\Right\Square as RightSquare;

use Futura\Solid\DIP\Wrong\PDFBook;
use Futura\Solid\DIP\Wrong\PDFReader;

use Futura\Solid\DIP\Right\PDFBook as RightPDFBook;
use Futura\Solid\DIP\Right\MobiBook;
use Futura\Solid\DIP\Right\EbookReader;

class HomeTest extends \PHPUnit_Framework_TestCase {

	public function tearDown() {
		return m::close();
	}

	public function testGetsAverageTemperature() {
		$service = m::mock('service');
		$service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
		$temperature = new Home($service);
		$this->assertEquals(12, $temperature->average());
	}

	public function getAdd() {
		return [
			[1,2,3],
			[4,5,9]
		];
	}

	/**
	* @dataProvider getAdd
	*/
	public function testAdd($a, $b, $c) {
		$add = new Home(1);
		$test = $add->add($a, $b);
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
	* @expectedException Exception
	*/
	public function testArea($r) {
		$c = new Client;
		$this->assertTrue($c->areaVerifier($r));
	}

	public function testAreaRight() {
		$c = new RightClient;
		$r = new RightSquare;
		$this->assertTrue($c->areaVerifier($r));
	}

	/**
	* Test Dependency Inversion Principle Wrong
	*/
	public function testWrongPDFBook() {
		$b = new PDFBook;
		$r = new PDFReader($b);
		$this->assertRegExp('/book/', $r->read());
	}

	public function addBook() {
		return [
			[new RightPDFBook],
			[new MobiBook],
		];
	}

	/**
	 * @dataProvider addBook
	 */
	public function testRightBook($b) {
		$r = new EbookReader($b);
		$this->assertRegExp('/book/', $r->read());
	}

}
