<?php

namespace Services\ScolariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Services\ScolariteBundle\Entity\Eleve;// bah g perdu 1H cet import se fait à lamain . Merde !!!
use Services\ScolariteBundle\DependencyInjection\Configuration;
use Symfony\Component\HttpFoundation\Request;// OK c' le bon
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\HttpFoundation\File\UploadedFile;



class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/saisieEtudiant", name="saisirEleves")
     * @Template()
     */
    public function saisieEtudiantAction(Request $request)
    {
        $et = new Eleve();
        $form = $this->createFormBuilder($et)
            ->add('cODE', 'text', [ 'attr'=>['placeholder'=>"Code",'class'=>'form-control']] )
            ->add('nomEleve', 'text', [ 'attr'=>['placeholder'=>"Nom",'class'=>'form-control']])
            ->add('emailEleve', 'text', [ 'attr'=>['placeholder'=>"Email",'class'=>'form-control']])
            ->add('photoEleve', 'file', [ 'attr'=>['placeholder'=>"Photo",'class'=>'form-control','requred'=>'no']])
            ->add('Enregistrer', 'submit')
            ->getForm();
        //requette de saisie (accès en ecriture à la base)
        $form->handleRequest($request);
        //Enregistrement
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($et);
            $em->flush();
            //Redirection vers listProduit(affichage)
            // return $this->redirect($this->generateUrl("afficherListProduits2"));
            /**************************
            public function upload()
            {
                if ($form->isSubmitted() && $form->isValid()) {
                    $someNewFilename = 'photoEleve';
                    $file = $form['photoEleve']->getData();
                    $directory = 'bundles/servicesscolarite/images/';
                    $file->move($directory, $someNewFilename);
                }
            }
             ********************************/
            if(isset($_FILES['photoEleve'])) {
                $nomPhoto = $_FILES['photoEleve']['name'];
                $fichierTempo = $_FILES['photoEleve']['tmp_name']->getData();
                move_uploaded_file($fichierTempo, 'bundles/servicesscolarite//images/'.$nomPhoto);
            }
        }
        //Accès en lecture ( à la base de données)
        $listedeseleves = $this->getDoctrine()->getRepository("ServicesScolariteBundle:Eleve")->findAll();
        //Model d'affichage
        return array('f' => $form->createView(), 'listedeseleves' => $listedeseleves);
    }

    /**
     * @Route("/listEleves", name="afficherListEleves" )
     * @Template()
     */
    public function listEleveAction()
    {
        $eleves = $this->getDoctrine()->getRepository("ServicesScolariteBundle:Eleve")->findAll();
        //Model d'affichage
        return array('eleves' => $eleves);
    }

    /**
     * @Route("/modifEleve/", name="page_modif")
     * @Route("/modifEleve/{id}/edit", name="modifierEleves")
     * @Template()
     */
    public function modifEleveAction(Eleve $et,Request $request)
    {
        //$et = new Eleve();

        $form = $this->createFormBuilder($et)
            ->add('cODE', 'text', [ 'attr'=>['placeholder'=>"Code",'class'=>'form-control']] )
            ->add('nomEleve', 'text', [ 'attr'=>['placeholder'=>"Nom",  'class'=>'form-control']])
            ->add('emailEleve', 'text', [ 'attr'=>['placeholder'=>"Email",  'class'=>'form-control']])
            ->add('photoEleve', 'file',  [ 'data_class' => null,  'label' => false ])
            ->add('Enregistrer', 'submit')
            ->getForm();
        //requette de saisie (accès en ecriture à la base)
        $form->handleRequest($request);
        //Enregistrement
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if(isset($_FILES['photoEleve'])) {
                $nomPhoto = $_FILES['photoEleve']['name'];
                $fichierTempo = $_FILES['photoEleve']['tmp_name']->getData();
                move_uploaded_file($fichierTempo, 'bundles/servicesscolarite//images/'.$nomPhoto);
            }
            $em->persist($et);
            $em->flush();
            //return $this->redirectToRoute('modifierEleves',['id'=>$et->getId()]);
        }
        //Accès en lecture ( à la base de données)
        $listedeseleves = $this->getDoctrine()->getRepository("ServicesScolariteBundle:Eleve")->findAll();
        //Model d'affichage
        return array('f' => $form->createView(), 'listedeseleves' => $listedeseleves);
    }

    /**
     * @Route("/supprimerEleve/{id}", name="page_delet")
     * @Template()
     * @param Eleve $eleve
     * @return
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function supprimerEleveAction(Eleve $eleve)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($eleve);
        $em->flush();
        //return $this->redirectToRoute('saisirEleves');
        return $this->redirect($this->generateUrl("saisirEleves"));
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('image', FileType::class);
    }
}
