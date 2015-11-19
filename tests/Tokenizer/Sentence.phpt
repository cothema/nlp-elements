<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Sentence as Tested;

require_once __DIR__ . '/../bootstrap.php';

class Sentence extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['There are 2 sentences. This is the last one.', ['There are 2 sentences.', 'This is the last one.']],
            ['Are you sure? Yes, I am!', ['Are you sure?', 'Yes, I am!']]
        ];
    }

}

(new Sentence)->run();
