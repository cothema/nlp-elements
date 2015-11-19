<?php

namespace Cothema\NLP\Elements\Model;

class ComplexSentence extends A\Cluster {

    protected function isPartValid($part) {
        if ($part instanceof ComplexSentencepart || $part instanceof Punctuation || $part instanceof Word\Conjuction) {
            return true;
        }
        return false;
    }

}
