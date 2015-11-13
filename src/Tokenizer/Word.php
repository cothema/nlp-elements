<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;

class Word extends A\Tokenizer {

    protected function process() {
        $array = preg_split("/[\s\,\.\?\!]+/", $this->input, -1, PREG_SPLIT_NO_EMPTY);

        $out = [];
        foreach ($array as $arrayOne) {
            $out[] = new Model\Word($arrayOne);
        }

        $this->output = $out;
    }

}
