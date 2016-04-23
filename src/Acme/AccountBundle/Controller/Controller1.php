<?php

namespace Acme\AccountBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Controller1{

        /** 
        * @Route("/test4/{name}",name="hello")
        */

public function indexAction($name)
{

        return new Response('<html><body>Lucky Number : '.$name.'</body></html>');

}
}
?>

