<?php

namespace Cothema\NLP\Elements\Output\I;

interface Output {

    public function __construct($content);

    public function __toString();
}
