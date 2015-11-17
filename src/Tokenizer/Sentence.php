<?php

namespace Cothema\NLP\Elements\Tokenizer;

use Cothema\NLP\Elements\Model;

class Sentence extends A\Tokenizer {

	protected function process() {
		$delimiters = '\.\?\!';

		$array = preg_split("/([^" . $delimiters . "]+[" . $delimiters . "]+)\s+/", $this->input, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

		$out = [];
		foreach ($array as $arrayOne) {
			$out[] = new Model\Sentence(trim($arrayOne));
		};

		$this->output = $out;
	}

}
