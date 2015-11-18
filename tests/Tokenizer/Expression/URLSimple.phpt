<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\URLSimple as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URLSimple extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('Website URL is example.com.'))->tokenize(TRUE);
        
        Assert::same('example.com', $output[0]);
        Assert::same(1, count($output));
    }

}

(new URLSimple)->run();
