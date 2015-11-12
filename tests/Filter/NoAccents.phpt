<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Filter\NoAccents as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class NoAccents extends \Tester\TestCase {

	public function testCase1() {
		Assert::same('Zenich', (new Tested('Ženich'))->apply());
	}

}

(new NoAccents)->run();
