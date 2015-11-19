<?php

namespace Cothema\NLP\Test\Elements\Situation;

use Cothema\NLP\Elements\Situation\Situation as Tested;
use Cothema\NLP\Elements;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Situation extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCase1() {
        $entity = new Elements\Situation\Entity;
        $activity = new Elements\Situation\Activity;
        $situation = new Tested;
        
        $situation->entity = $entity;
        $situation->activity = $activity;
        
        Assert::same($situation->entity, $entity);
        Assert::same($situation->activity, $activity);
    }

}

(new Situation)->run();
