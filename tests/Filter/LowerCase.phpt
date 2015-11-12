<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Filter\LowerCase as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class LowerCase extends \Tester\TestCase {

	public function testCase1() {
		Assert::same('drak', (new Tested('Drak'))->apply());
	}

}

(new LowerCase)->run();
