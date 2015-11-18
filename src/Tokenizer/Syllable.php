<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;
use Cothema\NLP\Elements\Validator;

class Syllable extends A\Tokenizer {

    private static function isVowel($letter) {
        return (new Validator\Vowel($letter))->isValid();
    }

    protected function process() {
        $syllables = [];
        $i = 0;
        $letters = (new Letter($this->input))->tokenize();
        $candidate = FALSE;
        $closeAfter = FALSE;
        $closeBefore = FALSE;
        $nonVowelCount = 0;
        
        for ($j = 0; isset($letters[$j]); $j++) {
            if ($candidate === TRUE) { // before is vowel
                if (!self::isVowel($letters[$j])) {
                    if (isset($letters[$j + 1])) {
                        if (self::isVowel($letters[$j + 1])) {
                            $closeBefore = TRUE;
                        } else {
                            if (isset($letters[$j + 2]) && !self::isVowel($letters[$j + 2])) {
                                $closeAfter = TRUE;
                            }
                        }
                    }
                }
            }

            if ($nonVowelCount === 2) {
                if (isset($letters[$j + 1]) && self::isVowel($letters[$j + 1])) {
                    $closeBefore = TRUE;
                    $nonVowelCount = 0;
                }
            }

            if ($nonVowelCount === 3) {
                if (isset($letters[$j + 1]) && self::isVowel($letters[$j + 1])) {
                    $closeBefore = TRUE;
                    $nonVowelCount = 0;
                } else {
                    $closeAfter = TRUE;
                    $nonVowelCount = -1;
                }
            }

            if ($closeBefore) {
                $i++;
                $closeBefore = FALSE;
                $candidate = FALSE;
            }

            (!isset($syllables[$i])) && $syllables[$i] = new Model\Syllable;

            $syllables[$i]->append($letters[$j]);

            if ($closeAfter) {
                $i++;
                $closeAfter = FALSE;
                $candidate = FALSE;
            } elseif (self::isVowel($letters[$j])) {
                $candidate = TRUE;
            }

            $nonVowelCount = (self::isVowel($letters[$j])) ? 0 : ($nonVowelCount + 1);
        }

        $this->output = $syllables;
    }

}
