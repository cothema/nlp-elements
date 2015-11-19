<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Char as Tested;

require_once __DIR__ . '/../bootstrap.php';

class Char extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['This way!', ['T', 'h', 'i', 's', ' ', 'w', 'a', 'y', '!']],
            ['Chars', ['C', 'h', 'a', 'r', 's']]
        ];
    }

}

(new Char)->run();
