<?php

namespace Cothema\NLP\Test\Elements\Input\Text;

use Cothema\NLP\Elements\Input\Text\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = (new Tested('Hi Michael!'))->getOutput();

        Assert::type(Model\Paragraph::class, $example);
        Assert::same('Hi Michael!', (string) $example);
    }

}

(new Paragraph)->run();
