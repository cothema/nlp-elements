<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;

class Letter extends A\Tokenizer {

    protected function process() {
        $array = $this->getLetters();

        $out = [];
        foreach ($array as $arrayOne) {
            $out[] = new Model\Letter($arrayOne);
        }

        $this->output = $out;
    }

    public function getLetters() {
        $chars = (new Char($this->input))->tokenize(TRUE);

        /* Remove special chars */
        for ($i = 0; isset($chars[$i]); $i++) {
            if (in_array($chars[$i], ['', ' ', '.', ':', '?', '!'])) {
                unset($chars[$i]);
                continue;
            }
        }

        /* Merge ch as a one letter */
        for ($i = 1; isset($chars[$i]); $i++) {
            if ($chars[$i] === 'h' && $chars[$i - 1] === 'c') {
                unset($chars[$i - 1]);
                $chars[$i] = 'ch';
            }
            if ($chars[$i] === 'h' && $chars[$i - 1] === 'C') {
                unset($chars[$i - 1]);
                $chars[$i] = 'Ch';
            }
            if ($chars[$i] === 'H' && $chars[$i - 1] === 'C') {
                unset($chars[$i - 1]);
                $chars[$i] = 'CH';
            }
        }

        return array_values($chars);
    }

}
