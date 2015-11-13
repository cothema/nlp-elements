<?php

namespace Cothema\NLP\Elements\Model\A;

abstract class Part extends \Nette\Object {

    protected $value;
    protected $clean = TRUE;

    public function __construct($value = NULL) {
        $this->value = $value;
        $this->clean && $this->clean();
    }

    public function __toString() {
        return $this->value;
    }

    protected function clean() {
        $this->value = trim($this->value);
    }
    
    /**
     * 
     * @param string $string
     */
    public function append($string) {
        $this->value .= $string;
    }

}
