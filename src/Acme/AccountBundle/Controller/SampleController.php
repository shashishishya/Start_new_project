<?php

namespace Acme\AccountBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SampleController extends Controller{
	
	/** 
	* @Route("/hello123", name="hello123")
	*/

public function indexAction()
{
	
	return $this->render('AcmeAccountBundle:Test:base.html.twig');
}
}
?> 
