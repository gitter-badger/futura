<?php
namespace Futura\Solid\OCP\Right;

use Futura\Solid\OCP\Right\Measurable;

class Progress {

    private $measurableContent;

		function __construct(Measurable $measurableContent) {
		  $this->measurableContent = $measurableContent;
		}

    function getAsPercent() {
        return $this->measurableContent->getSent() * 100 / $this->measurableContent->getLength();
    }

}

?>
