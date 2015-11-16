<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\Universal as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Universal extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('5 apples'))->tokenize(TRUE);
        
        Assert::same('5', $output[0]);
        Assert::same('apples', $output[1]);
        Assert::same(2, count($output));
    }
    
    public function testCase2() {
        $output = (new Tested('4 cats and 3 dogs.'))->tokenize(TRUE);
        
        Assert::same('4', $output[0]);
        Assert::same('cats', $output[1]);
        Assert::same('and', $output[2]);
        Assert::same('3', $output[3]);
        Assert::same('dogs', $output[4]);
        Assert::same(5, count($output));
    }

}

(new Universal)->run();
