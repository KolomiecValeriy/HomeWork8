<?php

namespace Kolomiets\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @param int $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($page)
    {
        $url_home = $this->generateUrl('kolomiets_twig_test');

        return $this->render('KolomietsTwigBundle:Default:index.html.twig',
            array(
                'page'=>$page,
                'url_home'=>$url_home,
            )
        );
    }

    public function homeAction()
    {
        return $this->render('KolomietsTwigBundle:Default:home.html.twig');
    }
}
