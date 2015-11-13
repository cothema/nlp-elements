<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Analytics\Count as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Count extends \Tester\TestCase {

    public function testWords1() {
        Assert::same(2, (new Tested('Word', 'red flower'))->getCount());
    }

    public function testWords2() {
        Assert::same(6, (new Tested('Word', 'Hi, my name is Michael Smith.'))->getCount());
    }

    public function testSentences1() {
        Assert::same(1, (new Tested('Sentence', 'How it works?'))->getCount());
    }

    public function testSentences2() {
        Assert::same(2, (new Tested('Sentence', 'Excellent! You\'ve passed the test.'))->getCount());
    }

    /**
     * @throws \Cothema\NLP\Elements\Analytics\Exception\TokenizerNotFound
     */
    public function testUnexistingTokenizer() {
        new Tested('xxxx', 'Excellent! You\'ve passed the test.');
    }

}

(new Count)->run();
