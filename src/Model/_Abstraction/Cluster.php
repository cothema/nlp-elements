<?php

namespace Cothema\NLP\Elements\Model\A;

use Cothema\NLP\Elements\Model;
use Cothema\NLP\Elements\Model\Exception;

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

            if (!($part instanceof Model\Punctuation)) {
                $out !== '' && $out .= ' ';
            }
            
            $out .= $part;
        }

        return trim($out);
    }

    public function addPart($part) {
        if ($this->isPartValid($part)) {
            $this->parts[] = $part;
        } else {
            throw new Exception\InvalidClusterPart();
        }
    }

    protected function isPartValid($part) {
        return true;
    }

}
