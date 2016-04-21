<?php

// src/AppBundle/Controller/HelloController1.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController1 {
	
     /**
     * @Route("/sample/{firstname}/{lastname}", name="sample")
     */

	public function indexAction($firstname,$lastname){
		return new Response('<html><body>Hello '.$firstname.' '.$lastname.'!!</body></html>');
	}
}
?>
