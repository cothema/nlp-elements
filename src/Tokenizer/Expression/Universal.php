<?php

namespace Cothema\NLP\Elements\Tokenizer\Expression;

class Universal extends \Cothema\NLP\Elements\Tokenizer\A\Expression {

	protected function process() {
		$array = $this->processToArray();

		$out = [];
		foreach ($array as $arrayOne) {
			$out[] = $this->newModelClassSelection($arrayOne, [
				'Expression\\Number',
				'Expression\\Email', 'Expression\\PhoneNumber',
				'Expression\\Contraction', 'Expression\\Word'
			]);
		}

		$this->output = $out;
	}

	/**
	 *
	 * @param mixed $value
	 * @param array $candidates
	 */
	protected function newModelClassSelection($value, $candidates = []) {
		foreach ($candidates as $candidate) {
			if ($this->isValid($value, $candidate)) {
				$className = $this->getModelClassName($candidate);
				return new $className($value, $candidate);
			}
		}

		$className = $this->getModelClassName();
		return new $className($value);
	}

}
