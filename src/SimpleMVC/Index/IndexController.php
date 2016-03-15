<?php
namespace SimpleMVC\Index;

use SimpleMVC\Controller\AbstractWebController;
use SimpleMVC\Index\Template\IndexControllerTemplate;

final class IndexController extends AbstractWebController {
    /**
     * @return bool
     */
    public function actionIndex() {
        /** @var IndexControllerTemplate $Template */
        $Template = $this->getResponse()->getTemplate();

        /** @var IndexControllerIndexRequest $Request */
        $Request = $this->getRequest();

        $Template->setTestParam($Request->getTestParam());

        return true;
    }
}
