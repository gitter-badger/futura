<?php
namespace Futura\Solid\ISP\Wrong;

use Futura\Solid\ISP\Wrong\Animal;

class Bird extends Animal {
    function example() {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}