<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Filter\FirstUpper as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class FirstUpper extends \Tester\TestCase {

	public function testCase1() {
		Assert::same('Michael', (new Tested('michael'))->apply());
	}

}

(new FirstUpper)->run();
