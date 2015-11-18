<?php

namespace Cothema\NLP\Elements\Model\A;

use \Cothema\NLP\Elements\Model\Exception;

abstract class Part extends \Nette\Object {

    /** @var string */
    protected $value;

    /** @var boolean */
    protected $clean = TRUE;

    /** @var string */
    protected $validator;

    /** @var array */
    protected $flags = [];

    /**
     * 
     * @param mixed $value
     */
    public function __construct($value = NULL) {
        $value !== NULL && $this->setValue($value);
        $this->clean && $this->clean();
        
        foreach($this->getAllowedFlagKeys() as $flag) {
            $this->flags[$flag] = [];
        }
    }

    /**
     * 
     * @return string
     */
    public function __toString() {
        return (string) $this->value;
    }

    /**
     * @throws Exception\InvalidInput
     * @return void
     */
    protected function setValue($value) {
        $valid = $this->validate($value);
        if ($valid) {
            $this->value = (string) $value;
        } else {
            throw new Exception\InvalidInput;
        }
    }

    /**
     * @return boolean
     */
    protected function validate($value) {
        if ($this->validator !== NULL) {
            $validator = $this->getValidatorClassName();
            return (new $validator($value))->isValid();
        }
        return TRUE;
    }

    /**
     * 
     * @param string|NULL $class
     * @return string
     */
    protected function getValidatorClassName($class = NULL) {
        if ($class === NULL) {
            $class = $this->validator;
        }
        return '\\Cothema\\NLP\\Elements\\Validator\\' . $class;
    }

    /**
     * @return void
     */
    protected function clean() {
        $this->value = trim((string) $this->value);
    }

    /**
     * 
     * @param string $string
     */
    public function append($string) {
        $this->value .= $string;
    }

    /**
     * 
     * @param string $key
     * @param string $value
     * @throws Exception\InvalidFlag
     */
    public function setFlag($key, $value) {
        if (!$this->isFlagAllowed($key)) {
            throw new Exception\InvalidFlag;
        }

        $this->flags[$key] = [];
        $this->addFlag($key, $value);
    }

    /**
     * 
     * @param string $key
     * @param string $value
     * @throws Exception\InvalidFlag
     */
    public function addFlag($key, $value) {
        if (!$this->isFlagAllowed($key)) {
            throw new Exception\InvalidFlag;
        }
        !isset($this->flags[$key]) && $this->flags[$key] = [];
        $this->flags[$key][] = $value;
    }

    /**
     * 
     * @param string $key
     * @return array
     * @throws Exception\InvalidFlag
     */
    public function getFlag($key) {
        if (!$this->isFlagAllowed($key)) {
            throw new Exception\InvalidFlag;
        }
        return $this->flags[$key];
    }

    /**
     * 
     * @param string $flag
     * @return boolean
     */
    protected function isFlagAllowed($flag) {
        return in_array($flag, $this->getAllowedFlagKeys());
    }
    
    /**
     * 
     * @return array
     */
    protected function getAllowedFlagKeys() {
        return ['classes', 'tags'];
    }

}
