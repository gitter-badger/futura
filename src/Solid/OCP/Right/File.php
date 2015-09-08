<?php
namespace Futura\Solid\OCP\Right;

use Futura\Solid\OCP\Right\Measurable;

class File implements Measurable {

    private $length;
    private $sent;

    public $filename;
    public $owner;

    public function setLength($length) {
        $this->length = $length;
    }

    public function getLength() {
        return $this->length;
    }

    public function setSent($sent) {
        $this->sent = $sent;
    }

    public function getSent() {
        return $this->sent;
    }

    public function getRelativePath() {
        return dirname($this->filename);
    }

    public function getFullPath() {
        return realpath($this->getRelativePath());
    }

}