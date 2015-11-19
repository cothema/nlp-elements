<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Vowel as Tested;

require_once __DIR__ . '/../bootstrap.php';

class Vowel extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['Chars', ['a']],
            ['Scooter', ['o', 'o', 'e']]
        ];
    }

}

(new Vowel)->run();
