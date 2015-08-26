<?php
namespace Futura\Solid\LSP\Right;

use Futura\Solid\LSP\Right\Shape;

class Client extends Shape
{
	
	function areaVerifier(Shape $r) {
        $r->setWidth(5);
        $r->setHeight(4);
 
        if($r->area() != 20) {
            throw new Exception('Bad area!');
        }
 
        return true;
    }

}
?>