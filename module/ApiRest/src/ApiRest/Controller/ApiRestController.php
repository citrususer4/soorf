<?php

namespace ApiRest\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class ApiRestController extends AbstractActionController
{

    public function indexAction() {
       
        $manager = $this->getServiceLocator()->get('ZeDbManager');
        $model = $manager->get('ApiRest\Model\Table\Tasks');
        $this->firephp(true);

        return new JsonModel($this->params()->fromRoute());
    }

}
