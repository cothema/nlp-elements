<?php

namespace Cothema\NLP\Elements\Input\XML;

use Cothema\NLP\Elements\Model;
use Nette\Utils\Html;

class Paragraph extends \Cothema\NLP\Elements\Input\A\Input implements \Cothema\NLP\Elements\Input\I\Input {

	public function process() {
		$html = new Html;
		$html->setHtml($this->input);

		$this->output = new Model\Paragraph($html->getText());
	}

}
