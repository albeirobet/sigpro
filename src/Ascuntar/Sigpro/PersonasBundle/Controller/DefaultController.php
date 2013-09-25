<?php

namespace Ascuntar\Sigpro\PersonasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AscuntarSigproPersonasBundle:Default:index.html.twig', array('name' => $name));
    }
}
