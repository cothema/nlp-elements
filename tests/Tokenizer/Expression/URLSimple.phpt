<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\URLSimple as Tested;

require_once __DIR__ . '/../../bootstrap.php';

class URLSimple extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['Website URL is example.com.', ['example.com']]
        ];
    }

}

(new URLSimple)->run();
