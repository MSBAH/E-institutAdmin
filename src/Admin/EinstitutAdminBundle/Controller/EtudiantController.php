<?php

namespace Admin\EinstitutAdminBundle\Controller;

use Admin\EinstitutAdminBundle\Entity\Candidat;
use Admin\EinstitutAdminBundle\Entity\Diplome;
use Admin\EinstitutAdminBundle\Entity\Dossier;
use Admin\EinstitutAdminBundle\Entity\Etablissement;
use Admin\EinstitutAdminBundle\Entity\Etudiant;
use Admin\EinstitutAdminBundle\Entity\Fichier;
use Admin\EinstitutAdminBundle\Entity\InscriptionDiplome;
use Admin\EinstitutAdminBundle\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller {
    
    public function etudiantAction() {
        $em = $this->getDoctrine()->getManager();
        $etuds = $em->getRepository('EinstitutAdminBundle:InscriptionDiplome')->findall();
        return $this->render('EinstitutAdminBundle:Default:Etudiant.html.twig', array('etuds' => $etuds));
    }

    public function ajouterAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $user = null;
        $etudiant = null;
        $inscr = null;
        $diplome = null;
        $actionAdd = $request->request->get('btn_soumettre');

        if (isset($actionAdd)) {

            $user = new User();
            $etudiant = new Etudiant();
            $inscr = new InscriptionDiplome();
            $diplome = new Diplome();


            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $username = $prenom{0}.$nom;
            $email = $request->request->get('email');



            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setUsername($username);
            $user->setUsernameCanonical($username);
            $user->setEmailCanonical($email);
            $user->setEnabled(1);
            $user->setExpired(0);
            $user->setLocked(0);
//              $user->setRoles("a:0:{}");
            $user->setAvatar("img.png");
            $user->setPassword("pass");
            $user->setTel("02151305");
            $user->setSexe("homme");
            $user->setAdresse("hna");
            $user->setVille("Bichy");
            $user->setPays("mar");


            $numetudiant = $request->request->get('numEtudiant');
            $etudiant->setUtilisateur($user);
            $etudiant->setNumEtudiant($numetudiant);

//              $date = $request->request->get('dateInscription');
            $inscr->setDateInscription(new DateTime());

            $intitule = $request->request->get('intituleDiplome');
            $type = $request->request->get('typeDiplome');
            $etablissement = $em->getRepository('EinstitutAdminBundle:Etablissement')->find(1);
            $diplome->setIntituleDiplome($intitule);
            $diplome->setTypeDiplome($type);
            $diplome->setEtablissement($etablissement);



            $inscr->setDiplome($diplome);
            $inscr->setEtudiant($etudiant);


            $em->persist($user);
            $em->persist($etudiant);
            $em->flush();
            $em->persist($diplome);
            $em->flush();
            $em->persist($inscr);

            $em->flush();

               $this->get('session')->getflashbag()->add('info','Etudiant bien enregistré');

            return $this->redirect($this->generateUrl('einstitut_ajouter_etud', array("inscr" => $inscr)));
        }




        return $this->render('EinstitutAdminBundle:Default:Inscription_etud.html.twig', array('inscr' => $inscr, 'user' => $user, 'etudiant' => $etudiant, 'diplome' => $diplome));
    }
    
  public function AjouterCandidatAction() {
      //bd lien
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        // a null
        $user = null;
        $candidat = null;
        $diplome = null;
        $dossier = null;
        $fichier = null;
        $etab = null;
        // btn
        $actionAdd = $request->request->get('btn_soumettre');

        if (isset($actionAdd)) {
        //instance
            $user = new User();
            $candidat = new Candidat();
            $etab = new Etablissement();
            $dossier = new Dossier();
            $fichier = new Fichier();
            $diplome = new Diplome();
            
                  // gerer user
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $username = $prenom{0}.$nom;
            $email = $request->request->get('email');
            $tel = $request->request->get('tel');
            $sexe = $request->request->get('sexe');
            $adresse = $request->request->get('adresse');
            $ville = $request->request->get('ville');
            $pays = $request->request->get('pays');
            $password='pass'.Rand(10,199).Rand(100,299);
            
            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setUsername($username);
            $user->setUsernameCanonical($username);
            $user->setEmailCanonical($email);
            $user->setEnabled(1);
            $user->setExpired(0);
            $user->setLocked(0);
//              $user->setRoles("a:0:{}");
            $user->setAvatar("img.png");
            $user->setPassword($password); // à continuer
            $user->setTel($tel);
            $user->setSexe($sexe);
            $user->setAdresse($adresse);
            $user->setVille($ville);
            $user->setPays($pays);
            
              // gerer candidat
            $niveau = $request->request->get('niveau');
            $candidat->setUtilisateur($user);
            $candidat->setNiveau($niveau);
            $candidat->addDossier($dossier);
            
//            // gerer dossier
            $numd='NUM'.Rand(10,199).Rand(100,299);
            $dossier->setNumDossier($numd);
            $dossier->setCandidat($candidat);
            
                        
//            // gerer fichier
            $fichiers =$request->request->get('nomfichier');
            $fichier->setNomFichier($fichiers);
            $fichier->setDossier($dossier);
            $dossier->addFichier($fichier);
//            
//             // gerer etablissement à regler
            $nom_etab =$request->request->get('etablissement');
            $etab->setNomEtabl($nom_etab);
            $etab->setAdressEtabl("adr_etab");
            $etab->setPaysEtabl("pays_etab");
            $etab->setUser($user);
            $etab->setVilleEtabl("ville_etab");
            
//            return new Response($id_etab.'-'.$etablissement->getUser()->getNom());
//            $user->addEtablissement($etab); 

            // gerer diplome
            $formations = $request->request->get('formations');
            $diplome->setIntituleDiplome($formations);
            $diplome->setTypeDiplome("Master");
            $diplome->setEtablissement($etab);
            $etab->addDiplome($diplome);



//            

//            

//            
//              

            $em->persist($fichier);
            $em->persist($dossier);
            $em->persist($user);
            $em->persist($etab);
            $em->persist($diplome);
            $em->persist($candidat);

            $em->flush();

               $this->get('session')->getflashbag()->add('info','Candidat bien enregistré');

            return $this->redirect($this->generateUrl('einstitut_ajouter_candidat', array("candidat" => $candidat)));
        }
        
        // ALl
        $formations = $em->getRepository('EinstitutAdminBundle:Diplome')->findAll();
        $fichiers = $em->getRepository('EinstitutAdminBundle:Fichier')->findAll();
        $etablissement = $em->getRepository('EinstitutAdminBundle:Etablissement')->findAll();




        return $this->render('EinstitutAdminBundle:Default:Inscription_candidat.html.twig', array(
            'candidat' => $candidat,
            'user' => $user ,
            'formations' => $formations ,
            'fichiers' => $fichiers ,
            'etab'=>$etablissement, 
                ));
    }
    
//     public function AjouterEtudiantAction() {
//      //bd lien
//        $em = $this->getDoctrine()->getManager();
//        $request = $this->getRequest();
//        $user= null;
//        $candidat= null;
//        $etudiant= null;
//        
//        //btn
//        $actionAdd = $request->request->get('btn_soumettre');
//        
//         if (isset($actionAdd)) {
//        //instance
//            $user = new User();
//            $candidat = new Candidat();
//            $etudiant = new Etudiant();
//            
//        $candi = $request->request->get('formations');
//        
//        
//        
     }

