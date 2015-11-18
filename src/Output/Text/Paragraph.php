<?php

namespace Cothema\NLP\Elements\Output\Text;

use Cothema\NLP\Elements\Model\Paragraph as ModelParagraph;

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
        return (string) $this->content;
    }

}
