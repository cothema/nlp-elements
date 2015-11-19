<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Letter as Tested;

require_once __DIR__ . '/../bootstrap.php';

class Letter extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['apples', ['a', 'p', 'p', 'l', 'e', 's']],
            ['This way!', ['T', 'h', 'i', 's', 'w', 'a', 'y']],
            ['Chars', ['Ch', 'a', 'r', 's']],
            ['Chchch', ['Ch', 'ch', 'ch']]
        ];
    }

}

(new Letter)->run();
