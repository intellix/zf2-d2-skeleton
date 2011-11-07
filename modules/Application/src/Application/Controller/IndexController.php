<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController;

class IndexController extends \DoctrineProvider\Controller\ActionController
{

    public function indexAction()
    {
    
        $em = new $this->getEntityManager();
    
        return array();
    }
	

}
