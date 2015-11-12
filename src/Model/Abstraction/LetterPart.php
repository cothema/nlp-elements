<?php

namespace App\Universal\Part\Abstraction;

abstract class LetterPart extends \Nette\Object {

    protected $value;

    public function __construct($value) {
        $this->value = $value;
        $this->clean();
    }

    public function __toString() {
        return $this->value;
    }

    protected function clean() {
        $this->value = trim($this->value);
    }

    public function getLettersSmall() {
        return array_map(function($in) {
            return mb_strtolower($in, 'utf-8');
        }, $this->getLetters());
    }

    public function getChars() {
        preg_match_all("/./u", $this->value, $arr);
        $arr = array_chunk($arr[0], 1);
        return array_map('implode', $arr);
    }

    public function getLetters() {
        $chars = $this->getChars();

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

    protected function getLastLetter() {
        $chars = $this->getLetters();
        return isset($chars[count($chars) - 1]) ? $chars[count($chars) - 1] : NULL;
    }

    protected function getLastChar() {
        $chars = $this->getChars();
        return isset($chars[count($chars) - 1]) ? $chars[count($chars) - 1] : NULL;
    }

}
