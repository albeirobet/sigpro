<?php

namespace Ascuntar\Sigpro\PrestamosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AscuntarSigproPrestamosBundle:Default:index.html.twig');
    }
    
//        public function indexAction($name)
//    {
//        return $this->render('AscuntarSigproPrestamosBundle:Default:index.html.twig', array('name' => $name));
//    }
}
