<?php

namespace Cothema\NLP\Elements\Filter;

interface IFilter {

	public function __construct($string);

	public function apply();
}
