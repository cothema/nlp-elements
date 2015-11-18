<?php

namespace Cothema\NLP\Test\Elements\Output\Html;

use Cothema\NLP\Elements\Output\Html\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = new Model\Paragraph('Hi Michael!');

        Assert::same('<p>Hi Michael!</p>', (string) (new Tested($example)));
    }

    public function testValid2() {
        $example = new Model\Paragraph('Hi Michael!');
        $example->addFlag('classes', 'highlight');
        $example->addFlag('classes', 'important');

        Assert::same('<p class="highlight important">Hi Michael!</p>', (string) (new Tested($example)));
    }

}

(new Paragraph)->run();
