<?php

namespace Common\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommonCommonBundle:Default:index.html.twig');
    }
}
