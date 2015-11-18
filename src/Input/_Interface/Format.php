<?php

namespace Cothema\NLP\Elements\Input\I;

interface Input {

    public function __construct($input);

    public function process();

    public function getOutput();
}
