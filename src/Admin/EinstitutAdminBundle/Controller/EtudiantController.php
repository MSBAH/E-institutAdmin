<?php

namespace Admin\EinstitutAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller
{
    public function etudiantAction()
    {
        $em = $this->getDoctrine()->getManager();
        $etud = $em->getRepository('EinstitutAdminBundle:Etudiant')->findall();
        return $this->render('EinstitutAdminBundle:Default:index.html.twig', array('etud' => $etud));
    }
    public function AjouterEtudAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $actionAdd = $request->request->get('soumettre');
        
        if (isset($actionAdd)) {
             $User = new User();

            $nom = $request->request->get('nom');
        }
        
        
        
        
        return $this->render('EinstitutAdminBundle:Default:index.html.twig', array('etud' => $etud));
    }
    
}
