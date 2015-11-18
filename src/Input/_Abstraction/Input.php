<?php

namespace Cothema\NLP\Elements\Input\A;

abstract class Input extends \Nette\Object {

    /** @var mixed */
    protected $input;

    /** @var mixed */
    protected $output;

    /**
     * 
     * @param mixed $input
     */
    public function __construct($input) {
        $this->input = $input;
        $this->process();
    }

    /**
     * 
     * @return object
     */
    public function getOutput() {
        return $this->output;
    }

}
