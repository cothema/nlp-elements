<?php

namespace Cothema\NLP\Elements\Tokenizer\A;

abstract class Tokenizer extends \Nette\Object implements \Cothema\NLP\Elements\Tokenizer\I\Tokenizer {

    protected $input;
    protected $output;

    public function __construct($input) {
        $this->input = $input;
    }

    public function tokenize($stringOutput = FALSE) {
        $this->process();
        $stringOutput && $this->outputToStrings();
        return $this->output;
    }

    protected function process() {

    }

    private function outputToStrings() {
        foreach ($this->output as $key => $value) {
            $this->output[$key] = (string) $value;
        }
    }

}
