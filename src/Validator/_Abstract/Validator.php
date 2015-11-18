<?php

namespace Cothema\NLP\Elements\Validator\A;

abstract class Validator extends \Nette\Object implements \Cothema\NLP\Elements\Validator\I\Validator {

    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

}
