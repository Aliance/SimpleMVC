<?php
namespace SimpleMVC\Index;

use Aliance\Kanchanaburi\Controller\Request\QueryRequestParameter;
use OutOfBoundsException;
use SimpleMVC\Request\AbstractRequest;

final class IndexControllerIndexRequest extends AbstractRequest {
    /**
     * @var string
     */
    protected $testParam;

    public function __construct() {
        try {
            $this->testParam = htmlentities((new QueryRequestParameter('test'))->getValue());
        } catch (OutOfBoundsException $Ignored) {
            // 'test' query param is not mandatory
        }
    }

    /**
     * @return string
     */
    public function getTestParam() {
        return $this->testParam;
    }
}
