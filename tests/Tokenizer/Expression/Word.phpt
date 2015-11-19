<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\Word as Tested;

require_once __DIR__ . '/../../bootstrap.php';

class Word extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['apples and bananas', ['apples','and','bananas']],
            ['This is my dream.', ['This','is','my','dream']],
            ['What\'s up?', ['What\'s','up']]
        ];
    }

}

(new Word)->run();
