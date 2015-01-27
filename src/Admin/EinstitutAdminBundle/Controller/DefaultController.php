<?php

namespace Admin\EinstitutAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EinstitutAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
