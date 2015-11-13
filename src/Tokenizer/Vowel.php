<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;
use Cothema\NLP\Elements\Validator;

class Vowel extends A\Tokenizer {

    protected function process() {
        $array = $this->getVowels();

        $out = [];
        foreach ($array as $arrayOne) {
            $out[] = new Model\Vowel($arrayOne);
        }

        $this->output = $out;
    }

    private function getVowels() {
        $chars = (new Char($this->input))->tokenize(TRUE);

        $vowels = Validator\Vowel::getVowelLetters();

        for ($i = 0; isset($chars[$i]); $i++) {
            if (!in_array($chars[$i], $vowels)) {
                $chars[$i] = NULL;
            }
        }

        return array_filter($chars);
    }

}
