<?php

namespace Cothema\NLP\Elements\Input\Text;

use Cothema\NLP\Elements\Model\Paragraph;

class Paragraph extends \Cothema\NLP\Elements\Input\A\Input implements \Cothema\NLP\Elements\Input\I\Input {

    public function process() {
        $this->output = new Paragraph($this->input);
    }

}
