<?php

namespace Cothema\NLP\Elements\Input\Text;

use Cothema\NLP\Elements\Model;

class Paragraph extends \Cothema\NLP\Elements\Input\A\Input implements \Cothema\NLP\Elements\Input\I\Input {

	public function process() {
		$this->output = new Model\Paragraph($this->input);
	}

}
