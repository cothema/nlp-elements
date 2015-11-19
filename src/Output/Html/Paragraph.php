<?php

namespace Cothema\NLP\Elements\Output\Html;

use Cothema\NLP\Elements\Model\Paragraph as ModelParagraph;
use Cothema\NLP\Elements\Output\Exception;
use Nette\Utils\Html;

class Paragraph extends \Cothema\NLP\Elements\Output\A\Output implements \Cothema\NLP\Elements\Output\I\Output {

    /**
     * 
     * @param ModelParagraph $content
     */
    public function __construct($content) {
        if ($content instanceof ModelParagraph) {
            $this->content = $content;
        } else {
            throw new Exception\InvalidInput;
        }
    }

    /**
     * 
     * @return string
     */
    public function __toString() {
        $p = Html::el('p');

        foreach ($this->content->getFlag('classes') as $class) {
            $p->class[] = $class;
        }

        $p->setHtml((string) $this->content);

        return (string) $p;
    }

}
