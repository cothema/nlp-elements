<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\URL as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URL extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('Website URL is https://example.com/.'))->tokenize(TRUE);
        
        Assert::same('https://example.com/', $output[0]);
        Assert::same(1, count($output));
    }

}

(new URL)->run();
