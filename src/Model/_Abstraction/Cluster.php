<?php

namespace Cothema\NLP\Elements\Model\A;

abstract class Cluster extends LetterPart {

    protected $parts = [];
    
    public function __toString() {
        return $this->getText();
    }

    protected function getText() {
        if ($this->value) {
            return $this->value;
        }

        $out = '';

        foreach ($this->parts as $part) {
            if (trim($part) === '') {
                continue;
            }

            $out !== '' && $out .= ' ';

            $out .= $part;
        }

        return trim($out) . $this->getEnding();
    }

}
