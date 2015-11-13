<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Letter as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Letter extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('apples'))->tokenize(TRUE);

        Assert::same('a', $output[0]);
        Assert::same('p', $output[1]);
        Assert::same('p', $output[2]);
        Assert::same('l', $output[3]);
        Assert::same('e', $output[4]);
        Assert::same('s', $output[5]);
    }

    public function testCase2() {
        $output = (new Tested('This way!'))->tokenize(TRUE);

        Assert::same('T', $output[0]);
        Assert::same('h', $output[1]);
        Assert::same('i', $output[2]);
        Assert::same('s', $output[3]);
        Assert::same('w', $output[4]);
        Assert::same('a', $output[5]);
        Assert::same('y', $output[6]);
    }

    public function testCase3() {
        $output = (new Tested('Chars'))->tokenize(TRUE);

        Assert::same('Ch', $output[0]);
        Assert::same('a', $output[1]);
        Assert::same('r', $output[2]);
        Assert::same('s', $output[3]);
        Assert::same(4, count($output));
    }
    
    public function testCase4() {
        $output = (new Tested('Chchch'))->tokenize(TRUE);

        Assert::same('Ch', $output[0]);
        Assert::same('ch', $output[1]);
        Assert::same('ch', $output[2]);
        Assert::same(3, count($output));
    }

}

(new Letter)->run();
