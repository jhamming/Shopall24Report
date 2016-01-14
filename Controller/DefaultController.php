<?php

namespace OroCRM\Bundle\Shopall24ReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OroCRMShopall24ReportBundle:Default:index.html.twig', array('name' => $name));
    }
}
