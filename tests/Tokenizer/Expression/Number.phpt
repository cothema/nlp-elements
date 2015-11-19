<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\Number as Tested;

require_once __DIR__ . '/../../bootstrap.php';

class Number extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['2 apples and 5 bananas', ['2', '5']],
            ['5, 2 3', ['5', '2', '3']],
            ['What\'s up?', []]
        ];
    }

}

(new Number)->run();
