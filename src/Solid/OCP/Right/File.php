<?php
namespace Futura\Solid\OCP\Right;

use Futura\Solid\OCP\Right\Measurable;

class File implements Measurable {

    private $length;
    private $sent;

    public $filename;
    public $owner;

    function setLength($length) {
        $this->length = $length;
    }

    function getLength() {
        return $this->length;
    }

    function setSent($sent) {
        $this->sent = $sent;
    }

    function getSent() {
        return $this->sent;
    }

    function getRelativePath() {
        return dirname($this->filename);
    }

    function getFullPath() {
        return realpath($this->getRelativePath());
    }

}