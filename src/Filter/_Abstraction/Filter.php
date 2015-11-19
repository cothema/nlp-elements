<?php

namespace Cothema\NLP\Elements\Filter\A;

use \Cothema\NLP\Elements\Filter\Exception;

abstract class Filter extends \Nette\Object implements \Cothema\NLP\Elements\Filter\I\Filter {

    protected $value;

    public function __construct($input) {
        $this->value = (string) $input;
    }
    
    public function __toString() {
        return $this->apply();
    }

    public function apply() {
        $this->process();
        return $this->value;
    }

    protected function process() {
        throw new Exception\ProcessingNotImplemented('Processing not implemented!');
    }

}
