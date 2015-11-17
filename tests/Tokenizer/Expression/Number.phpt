<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\Number as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Number extends \Tester\TestCase {

	public function testCase1() {
		$output = (new Tested('2 apples and 5 bananas'))->tokenize(TRUE);

		Assert::same('2', $output[0]);
		Assert::same('5', $output[1]);
		Assert::same(2, count($output));
	}

	public function testCase2() {
		$output = (new Tested('5, 2 3'))->tokenize(TRUE);

		Assert::same('5', $output[0]);
		Assert::same('2', $output[1]);
		Assert::same('3', $output[2]);
		Assert::same(3, count($output));
	}

	public function testCase3() {
		$output = (new Tested('What\'s up?'))->tokenize(TRUE);

		Assert::same(0, count($output));
	}

}

(new Number)->run();
