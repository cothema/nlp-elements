<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\URL as Tested;

require_once __DIR__ . '/../../bootstrap.php';

class URL extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['Website URL is https://example.com/.', ['https://example.com/']]
        ];
    }

}

(new URL)->run();
