<?php

namespace App\Universal\Part\Abstraction;

abstract class Part extends \Nette\Object {

    protected $value;

    public function __construct($string) {
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

    public function getLetters() {
        $len = 1;
        preg_match_all("/./u", $this->value, $arr);
        $arr = array_chunk($arr[0], $len);
        $arr = array_map('implode', $arr);

        for ($i = 1; isset($arr[$i]); $i++) {
            if ($arr[$i] === 'h' && $arr[$i - 1] === 'c') {
                unset($arr[$i - 1]);
                $arr[$i] = 'ch';
            }
            if ($arr[$i] === 'h' && $arr[$i - 1] === 'C') {
                unset($arr[$i - 1]);
                $arr[$i] = 'Ch';
            }
            if ($arr[$i] === 'H' && $arr[$i - 1] === 'C') {
                unset($arr[$i - 1]);
                $arr[$i] = 'CH';
            }
        }

        return array_values($arr);
    }

}
