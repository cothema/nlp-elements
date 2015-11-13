<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Char as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Char extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('Chars'))->tokenize(TRUE);
        
        Assert::same('C', $output[0]);
        Assert::same('h', $output[1]);
        Assert::same('a', $output[2]);
        Assert::same('r', $output[3]);
        Assert::same('s', $output[4]);
        Assert::same(5, count($output));
    }
    
    public function testCase2() {
        $output = (new Tested('This way!'))->tokenize(TRUE);
        
        Assert::same('T', $output[0]);
        Assert::same('h', $output[1]);
        Assert::same('i', $output[2]);
        Assert::same('s', $output[3]);
        Assert::same(' ', $output[4]);
        Assert::same('w', $output[5]);
        Assert::same('a', $output[6]);
        Assert::same('y', $output[7]);
        Assert::same('!', $output[8]);
        Assert::same(9, count($output));
    }

}

(new Char)->run();
