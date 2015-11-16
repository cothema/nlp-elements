<?php

namespace Cothema\NLP\Elements\Tokenizer\A;

abstract class Expression extends Tokenizer {

    protected $className = 'Expression\\Universal';

    /**
     * 
     * @return array
     */
    protected function process() {
        $array = preg_split("/[\s\,\.\?\!]+/", $this->input, -1, PREG_SPLIT_NO_EMPTY);
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
     * @return bool
     */
    protected function isValid($expression) {
        $validatorClass = $this->getValidatorClassName();
        return (new $validatorClass($expression))->isValid();
    }

    protected function getModelClassName() {
        return '\\Cothema\\NLP\\Elements\\Model\\' . $this->className;
    }
    
    protected function getValidatorClassName() {
        return '\\Cothema\\NLP\\Elements\\Validator\\' . $this->className;
    }

}
