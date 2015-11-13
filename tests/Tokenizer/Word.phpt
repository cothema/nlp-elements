<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Word as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Word extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('apples and bananas'))->tokenize(TRUE);
        
        Assert::same('apples', $output[0]);
        Assert::same('and', $output[1]);
        Assert::same('bananas', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase2() {
        $output = (new Tested('This is my dream.'))->tokenize(TRUE);
        
        Assert::same('This', $output[0]);
        Assert::same('is', $output[1]);
        Assert::same('my', $output[2]);
        Assert::same('dream', $output[3]);
        Assert::same(4, count($output));
    }
    
    public function testCase3() {
        $output = (new Tested('What\'s up?'))->tokenize(TRUE);
        
        Assert::same('What\'s', $output[0]);
        Assert::same('up', $output[1]);
        Assert::same(2, count($output));
    }

}

(new Word)->run();
