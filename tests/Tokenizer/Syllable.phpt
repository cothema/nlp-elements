<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Syllable as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Syllable extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('kolo'))->tokenize(TRUE);

        Assert::same('ko', $output[0]);
        Assert::same('lo', $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase2() {
        $output = (new Tested('plechovka'))->tokenize(TRUE);

        Assert::same('ple', $output[0]);
        Assert::same('chov', $output[1]);
        Assert::same('ka', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase3() {
        $output = (new Tested('polička'))->tokenize(TRUE);

        Assert::same('po', $output[0]);
        Assert::same('lič', $output[1]);
        Assert::same('ka', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase4() {
        $output = (new Tested('moucha'))->tokenize(TRUE);

        Assert::same('mou', $output[0]);
        Assert::same('cha', $output[1]);
        Assert::same(2, count($output));
    }

}

(new Syllable)->run();
