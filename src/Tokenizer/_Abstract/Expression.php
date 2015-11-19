<?php

namespace Cothema\NLP\Elements\Tokenizer\A;

abstract class Expression extends Tokenizer {

    protected $className = 'Expression\\Universal';

    /**
     *
     * @return void
     */
    protected function process() {
        $array = $this->processToArray();
        $modelClass = $this->getModelClassName();

        $out = [];
        foreach ($array as $arrayOne) {
            if ($this->isValid($arrayOne)) {
                $out[] = new $modelClass($arrayOne);
            }
        }

        $this->output = $out;
    }

    /**
     *
     * @return array
     */
    protected function processToArray() {
        return preg_split("/([\,\.\?\!](\s|$)|\s)+/", $this->input, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     *
     * @return bool
     */
    protected function isValid($expression, $class = NULL) {
        $validatorClass = $this->getValidatorClassName($class);
        return (new $validatorClass($expression))->isValid();
    }

    protected function getModelClassName($class = NULL) {
        if ($class === NULL) {
            $class = $this->className;
        }
        return '\\Cothema\\NLP\\Elements\\Model\\' . $class;
    }

    protected function getValidatorClassName($class = NULL) {
        if ($class === NULL) {
            $class = $this->className;
        }
        return '\\Cothema\\NLP\\Elements\\Validator\\' . $class;
    }

}
