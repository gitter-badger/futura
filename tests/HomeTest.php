<?php
namespace Futura\tests;

use Futura\src\Home;

class HomeTest extends \PHPUnit_Framework_TestCase {

	public function getAdd(){
		return [
			[1,2,3],
			[4,5,6],
			[4,5,9]
		];
	}

	/**
	* @dataProvider getAdd
	*/
	public function testAdd($a, $b, $c){
		$add = new Home;
		$test = $add->add($a, $b);
		var_dump($test);
		$this->assertEquals($c, $test);
	}

}
