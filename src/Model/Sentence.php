<?php

namespace Cothema\NLP\Elements\Model;

class Sentence extends A\Cluster {

    private $ending;

    public function __construct($value = NULL) {
        $this->value = $value;
        $this->ending = '.';
    }

    public function getEnding() {
        return $this->ending;
    }

    public function setEnding($ending) {
        $this->ending = $ending;
    }

    public function addWord($word) {
        $this->parts[] = $word;
    }

    public function addText($text) {
        $this->parts[] = $text;
    }

}
