<?php

namespace Admin\EinstitutAdminBundle\Controller;

use Admin\EinstitutAdminBundle\Entity\Salle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EinstitutAdminBundle:Default:index.html.twig');
    }
    
    public function salleAction()
    {
        return $this->render('EinstitutAdminBundle:Default:Salle.html.twig');
    }
    
    public function ajouterSalleAction()
    {
        $salle = new Salle();
        $salle->setEtat('etat5');
        $salle->setNumSalle(5);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($salle);
        $em->flush();
        
//        $salle2 = $em->getRepository('EinstitutAdminBundle:Salle')->find(5);
//        $salle2->set
        $repository = $this->getDoctrine()->getManager()->getRepository('EinstitutAdminBundle:Salle');
        $salle2 = $repository->find(2);
        
        
        if($this->getRequest()->getMethod() == 'POST'){
            $this->get('session')->getFlashBag()->add('info','Salle Enregistré');
            return $this->redirect($this->generateUrl('einstitut_admin_salle_voir',array('id' => $salle->getId())));
        }
        return $this->render('EinstitutAdminBundle:Default:Salle.html.twig');
    }
}
