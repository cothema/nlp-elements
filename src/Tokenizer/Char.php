<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;

class Char extends A\Tokenizer {

    protected function process() {
        preg_match_all("/./u", $this->input, $array);
        $array = array_chunk($array[0], 1);
        $array = array_map('implode', $array);
        
        $out = [];
        foreach ($array as $arrayOne) {
            $out[] = new Model\Char($arrayOne);
        }
        
        $this->output = $out;
    }

}
