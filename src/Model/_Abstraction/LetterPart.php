<?php

namespace Cothema\NLP\Elements\Model\A;

abstract class LetterPart extends Part {

    protected function getLastLetter() {
        $chars = $this->getLetters();
        return isset($chars[count($chars) - 1]) ? $chars[count($chars) - 1] : NULL;
    }

    protected function getLastChar() {
        $chars = $this->getChars();
        return isset($chars[count($chars) - 1]) ? $chars[count($chars) - 1] : NULL;
    }

}
