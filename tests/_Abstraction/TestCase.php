<?php

namespace Cothema\NLP\Test\A;

use Tester\Assert;

abstract class TestCase extends \Tester\TestCase {
    
    protected $tested;

    protected function caseArray($word, array $syllables) {
        $output = (new $this->tested($word))->tokenize(TRUE);

        for ($i = 0; isset($syllables[$i]); $i++) {
            Assert::same($syllables[$i], $output[$i], 'Case "' . $word . '"');
        }

        Assert::same(count($syllables), count($output), 'Case (count) "' . $word . '"');
    }
    
    protected function iterateForCaseArray(array $array) {
        foreach ($array as $example) {
            $this->caseArray($example[0], $example[1]);
        }
    }

}
