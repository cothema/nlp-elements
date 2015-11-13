<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Vowel as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Vowel extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('Chars'))->tokenize(TRUE);
        
        Assert::same('a', $output[0]);
        Assert::same(1, count($output));
    }
    
    public function testCase2() {
        $output = (new Tested('Scooter'))->tokenize(TRUE);
        
        Assert::same('o', $output[0]);
        Assert::same('o', $output[1]);
        Assert::same('e', $output[2]);
        Assert::same(3, count($output));
    }

}

(new Vowel)->run();
