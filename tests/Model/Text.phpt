<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Text as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Text extends \Tester\TestCase {

    public function testCase1() {
        $example1 = 'It could be very long article. Maybe it\'s article with many sentences.';
        
        Assert::same($example1, (string) (new Tested($example1)));
    }

}

(new Text)->run();
