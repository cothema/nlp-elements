<?php

namespace Cothema\NLP\Elements\Analytics;

use \Cothema\NLP\Elements\Analytics\Exception;

class Count extends \Nette\Object {

    private $value;
    private $tokenizer;
    private $tokenizerNS = 'Cothema\\NLP\\Elements\\Tokenizer\\';
    /**
     * 
     * @param string $tokenizer
     * @param mixed $input
     */
    public function __construct($tokenizer, $input) {
        $this->setTokenizer($tokenizer);
        $this->value = (string) $input;
    }

    /**
     * 
     * @return integer
     */
    public function getCount() {
        return count($this->getTokenizer()->tokenize());
    }

    /**
     * 
     * @throws \Exception
     */
    private function getTokenizer() {
        $class = $this->getTokenizerClass();

        if (class_exists($class)) {
            return (new $class($this->value));
        }

        throw new Exception\TokenizerNotFound('Tokenizer "'.$this->tokenizer.'" is missing!');
    }

    private function setTokenizer($name) {
        if (!class_exists($this->getTokenizerClass($name))) {
            throw new Exception\TokenizerNotFound('Tokenizer "'.$name.'" not found!');
        }
        
        $this->tokenizer = $name;
    }

    private function getTokenizerClass($name = NULL) {
        $name === NULL && $name = $this->tokenizer;
        return $this->tokenizerNS . $name;
    }

}
