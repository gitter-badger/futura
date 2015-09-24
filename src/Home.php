<?php
namespace Futura;

class Home {

	public function __construct($service)
    {
        $this->_service = $service;
    }

    public function average()
    {
        $total = 0;
        for ($i=0;$i<3;$i++) {
            $total += $this->_service->readTemp();
        }
        return $total/3;
    }

	public function add($a, $b){
		return $a + $b;
	}

}
