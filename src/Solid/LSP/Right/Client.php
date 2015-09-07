<?php
namespace Futura\Solid\LSP\Right;

use Futura\Solid\LSP\Right\Shape;
use Exception;
class Client
{
	
	function areaVerifier(Shape $r) {
        $r->setWidth(4);
        $r->setHeight(5);
        if($r->area() != 25) {
            throw new Exception('Bad area!');
        }
 
        return true;
    }

}
?>