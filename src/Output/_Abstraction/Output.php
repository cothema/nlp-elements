<?php

namespace Cothema\NLP\Elements\Output\A;

abstract class Output extends \Nette\Object {

    /** @var mixed */
    protected $content;

    /**
     * 
     * @param mixed $content
     */
    public function __construct($content) {
        $this->content = $content;
    }
    
}
