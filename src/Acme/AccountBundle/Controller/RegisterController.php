<?php

namespace Acme\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegisterController extends Controller
{
    /**
     * @Route("/Blog", name="hello checking")
     */
    public function indexAction()
    {
        return $this->render('AcmeAccountBundle:Register:sample.html.php');
    }
}
