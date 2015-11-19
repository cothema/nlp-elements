<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;
use Cothema\NLP\Elements\Validator;
use Cothema\NLP\Elements\Filter;

class Syllable extends A\Tokenizer {

    private $letters = [];
    private $lettersExact = [];
    private $process = [];
    private $syllables = [];
    private $inputExact;

    public function __construct($input) {
        $this->inputExact = $input;
        $this->input = (string) new Filter\LowerCase($input);
    }
    
    private static function isVowel($letter) {
        return (new Validator\Vowel($letter))->isValid();
    }

    private static function isVoiceless($letter) {
        return in_array($letter, ['p', 't', 'ť', 'k', 'f', 's', 'š', 'ch', 'c', 'č']);
    }

    private function preprocess() {
        $this->letters = (new Letter($this->input))->tokenize();
        $this->lettersExact = (new Letter($this->inputExact))->tokenize();

        $this->process = [];
        $this->process['candidate'] = FALSE;
        $this->process['closeAfter'] = FALSE;
        $this->process['closeBefore'] = FALSE;
        $this->process['nonVowelCount'] = 0;
        $this->process['syllableIndex'] = 0;
        $this->process['syllableLetterIndex'] = 0;
    }

    protected function process() {
        $this->preprocess();

        for ($letterIndex = 0; isset($this->letters[$letterIndex]); $letterIndex++) {
            $this->processLetter($letterIndex);
        }

        $this->output = $this->syllables;
    }
    
    private function letterVoiceless($j) {
        return isset($this->letters[$j]) ? self::isVoiceless($this->letters[$j]) : FALSE;
    }
    
    private function letterVowel($j) {
        return isset($this->letters[$j]) ? self::isVowel($this->letters[$j]) : FALSE;
    }

    private function preprocessLetter($j) {
        if ($this->process['syllableLetterIndex'] === 1 && $this->process['nonVowelCount'] === 0 && $this->letterVoiceless($j) && !$this->letterVowel($j + 2)) {
            $this->process['closeBefore'] = TRUE;
            return;
        }

        if ($this->process['candidate'] === TRUE) { // before is vowel
            if (!$this->letterVowel($j)) {
                if (isset($this->letters[$j + 1])) {
                    if ($this->letterVowel($j + 1)) {
                        $this->process['closeBefore'] = TRUE;
                        return;
                    } else {
                        if (isset($this->letters[$j + 2]) && !$this->letterVowel($j + 2)) {
                            $this->process['closeAfter'] = TRUE;
                            return;
                        }
                    }
                }
            }
        }

        if ($this->process['nonVowelCount'] === 2) {
            if ($this->letterVowel($j + 1) && $this->letterVoiceless($j)) {
                $this->process['closeBefore'] = TRUE;
                return;
            }
        }

        if ($this->process['nonVowelCount'] === 3) {
            if ($this->letterVowel($j + 1)) {
                $this->process['closeBefore'] = TRUE;
                return;
            } else {
                $this->process['closeAfter'] = TRUE;
                return;
            }
        }
    }

    private function processLetter($letterIndex) {
        $isVowel = self::isVowel($this->letters[$letterIndex]);

        $this->preprocessLetter($letterIndex);

        $this->process['closeBefore'] && $this->newSyllable();

        $this->appendToActualSyllable($letterIndex);

        if ($this->process['closeAfter']) {
            $this->newSyllable();
        } else {
            if ($isVowel) {
                $this->process['nonVowelCount'] = 0;
                $this->process['candidate'] = TRUE;
            } else {
                $this->process['nonVowelCount']++;
            }
        }
    }

    private function newSyllable() {
        $this->process['syllableIndex']++;
        $this->process['closeBefore'] = FALSE;
        $this->process['closeAfter'] = FALSE;
        $this->process['candidate'] = FALSE;
        $this->process['nonVowelCount'] = 0;
        $this->process['syllableLetterIndex'] = 0;
    }

    private function appendToActualSyllable($letterIndex) {
        $this->appendToSyllable($this->process['syllableIndex'], $letterIndex);
        $this->process['syllableLetterIndex']++;
    }

    private function appendToSyllable($syllableIndex, $letterIndex) {
        !isset($this->syllables[$syllableIndex]) && $this->syllables[$syllableIndex] = new Model\Syllable;

        $this->syllables[$syllableIndex]->append($this->lettersExact[$letterIndex]);
    }

}
