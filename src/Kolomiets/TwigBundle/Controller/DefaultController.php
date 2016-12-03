<?php

namespace Kolomiets\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KolomietsTwigBundle:Default:index.html.twig');
    }
}
