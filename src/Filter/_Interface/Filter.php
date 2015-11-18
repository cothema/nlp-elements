<?php

namespace Cothema\NLP\Elements\Filter\I;

interface Filter {

	public function __construct($input);

	public function apply();
}
