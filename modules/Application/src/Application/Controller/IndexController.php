<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController;
	//,DoctrineProvider\Controller\ActionController;

class IndexController extends ActionController
{

	public function __construct(\Doctrine\ORM\EntityManager $em) {
		
	}
    public function indexAction()
    {
    	
        return array();
    }
	

}
