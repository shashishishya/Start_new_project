<?php

namespace Acme\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller{
 
public function listAction()
{
$posts = $this->get('doctrine')
->getManager()
->createQuery('SELECT p FROM AcmeAccountBundle:News p')
->execute();
return $this->render('AcmeAccountBundle:Blog:list.html.twig', array('posts' => $posts));
}
public function showAction($id)
{
$post = $this->get('doctrine')
->getManager()
->getRepository('AcmeAccountBundle:News')
->find($id);
if (!$post) {
// cause the 404 page not found to be displayed
throw $this->createNotFoundException();
}
return $this->render('AcmeAccountBundle:Blog:show.html.twig', array('post' => $post));
}
}
