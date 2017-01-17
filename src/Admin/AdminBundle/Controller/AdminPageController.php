<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\AdminBundle\Entity\Page;
use Admin\AdminBundle\Form\PageType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdminPageController extends Controller
{
    protected function getErrorMessages( $form )
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

    public function indexAction()
    {
        $oEm        = $this->getDoctrine()->getManager();
        $tPages     = $oEm->getRepository('AdminAdminBundle:Page')->findAll(  );
        return $this->render('AdminAdminBundle:Page:index.html.twig',
            array('pages' => $tPages)
        );
    }

    public function doAjouterAction()
    {
        $oPage   = new Page();

        $oTheform   = $this->createForm(new PageType(), $oPage);

        $oRequest   = $this->get('request');

        $oTheform->handleRequest($oRequest);

        if ( $oRequest->isXmlHttpRequest() ) {
            if ($oTheform->isValid()) {
                                $em = $this->getDoctrine()->getEntityManager();

                                $em->persist($oPage);
                                $em->flush();

                                $this->get('session')->getFlashBag()->add('info', 'La nouvelle Page a bien été ajoutée');

                                return $this->redirect($this->generateUrl('admin_admin_page'));
            } else {
                return new JsonResponse(array(
                    'isvalid' => 'false',
                    'message' => 'Formulaire invalide',
                    'data' => $this->getErrorMessages($oTheform)));
            }
        }
    }

    public function ajouterAction()
    {
        $oPage   = new Page();

        $oTheform   = $this->createForm(new PageType(), $oPage);

        return $this->render('AdminAdminBundle:Page:ajouter.html.twig',
            array('formajout' => $oTheform->createView())
        );
    }
}