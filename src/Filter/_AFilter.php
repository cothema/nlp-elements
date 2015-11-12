<?php

namespace Cothema\NLP\Elements\Filter;

abstract class AFilter extends \Nette\Object {

	protected $value;

	public function __construct($input) {
		$this->value = (string) $input;
	}

	public function apply() {
		$this->process();
		return $this->value;
	}

	protected function process() {
		throw new \Exception('Not implemented!');
	}

}
