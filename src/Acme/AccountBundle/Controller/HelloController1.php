<?php

namespace Acme\AccountBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController1 extends Controller{
	
	/**
	* @Route("/hello1", name="hello1")
	*/

	public function indexAction()
	  {
		return $this->redirect('http://google.com/');
	  }
}
?>
