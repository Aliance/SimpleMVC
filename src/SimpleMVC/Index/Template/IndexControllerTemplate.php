<?php
namespace SimpleMVC\Index\Template;

use SimpleMVC\Template\AbstractTemplate;

/**
 * Index template
 */
class IndexControllerTemplate extends AbstractTemplate {
    const PATH = './src/SimpleMVC/Index/Template';

    /**
     * @var string
     */
    protected $testParam;

    /**
     * @return string
     */
    public function getTestParam() {
        return $this->testParam;
    }

    /**
     * @param string $testParam
     */
    public function setTestParam($testParam) {
        $this->testParam = $testParam;
    }
}
