<?php

namespace Acme\AccountBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController{

	/** 
	* @Route("/lucky/number")
	*/

public function numberAction()
{
	$number = rand(0,100);
	
	return new Response('<html><body>Lucky Number : '.$number.'</body></html>');

}
}
?> 
