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
        for ($j = 0; isset($letters[$j]); $j++) { // iterate letters
            if ($candidate === TRUE) { // before is vowel
                if (!self::isVowel($letters[$j])) { // not vowel
                    if (isset($letters[$j + 1])) {
                        if (self::isVowel($letters[$j + 1])) {
                            $closeBefore = TRUE;
                        } else {// next is not vowel
                            if (isset($letters[$j + 2]) && !self::isVowel($letters[$j + 2])) {
                                $closeAfter = TRUE;
                            } else {
                                
                            }
                        }
                    } else {
                        // end of the word
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

            if (!isset($syllables[$i])) {
                $syllables[$i] = new Model\Syllable;
            }
            $syllables[$i]->append($letters[$j]);

            if ($closeAfter) {
                $i++;
                $closeAfter = FALSE;
                $candidate = FALSE;
            } elseif (self::isVowel($letters[$j])) {
                $candidate = TRUE;
            }

            // non-vowel count
            if (self::isVowel($letters[$j])) {
                $nonVowelCount = 0;
            } else {
                $nonVowelCount++;
            }
            // end: non-vowel count
        }

        $this->output = $syllables;
    }

}
