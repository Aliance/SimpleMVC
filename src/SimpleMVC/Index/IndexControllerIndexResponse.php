<?php
namespace SimpleMVC\Index;

use SimpleMVC\Index\Template\IndexControllerTemplate;
use SimpleMVC\Response\AbstractResponse;

/**
 * Index controller
 */
final class IndexControllerIndexResponse extends AbstractResponse {
    /**
     * {@inheritdoc}
     */
    public function __construct() {
        parent::__construct();
        $this->setTemplate(new IndexControllerTemplate());
    }
}
