<?php

namespace Acme\AccountBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController1{

	/** 
	* @Route("/test123/number/{count}")
	*/
	public function numericAction($count)
	{

		$numbers = array();
		for($i =0 ; $i<$count;$i++)
		  {
			$numbers[] = rand(0,100);
		  }
	$numberslist = implode(',', $numbers);
	return  new Response('<html><body> LUCKY NUMBER : '.$numberslist.'</body></html>');
	}
}
?>
