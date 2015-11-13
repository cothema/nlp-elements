<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Sentence as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Sentence extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('There are 2 sentences. This is the last one.'))->tokenize(TRUE);

        Assert::same('There are 2 sentences.', $output[0]);
        Assert::same('This is the last one.', $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase2() {
        $output = (new Tested('Are you sure? Yes, I am!'))->tokenize(TRUE);

        Assert::same('Are you sure?', $output[0]);
        Assert::same('Yes, I am!', $output[1]);
        Assert::same(2, count($output));
    }

}

(new Sentence)->run();
