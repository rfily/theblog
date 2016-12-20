<?php

namespace TheBlog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use TheBlog\BlogBundle\Entity\Article;
use TheBlog\BlogBundle\EventListener\ArticleCheckerEvents;
use TheBlog\BlogBundle\Form\ArticleFiltreType;
use TheBlog\BlogBundle\Entity\Commentaires;
use TheBlog\BlogBundle\Entity\MessageInfo;
use TheBlog\BlogBundle\Form\CommentairesType;
use TheBlog\BlogBundle\Form\MessageInfoType;
use TheBlog\BlogBundle\EventListener\ArticleLoadEvent;

class BlogController extends Controller
{
    public function pdfAction()
    {
        $pageUrl = $this->generateUrl('theblog_accueil', array(), true);
        return new Response(
            $this->get('knp_snappy.pdf')->getOutput($pageUrl),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file3.pdf"'
            )
        );
    }
    public function indexAction()
    {

        $em             = $this->getDoctrine()->getManager();

        $tArticles      =  $em->getRepository('TheBlogBlogBundle:Article')->findAll();

        return $this->render('TheBlogBlogBundle:Blog:index.html.twig', array('articles' => $tArticles));
    }

    public function rechercheAction()
    {
        $oArticle   = new Article();

        $oTheform   = $this->createForm(new ArticleFiltreType(), $oArticle);

        $tArticles = array();

        $oRequest           = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->handleRequest($oRequest);

            if ( $oTheform->isValid() )
            {
                $em             = $this->getDoctrine()->getManager();
                $tArticles      =  $em->getRepository('TheBlogBlogBundle:Article')->getArticleByTitre($oTheform->getData()->getTitre());

                return $this->render('TheBlogBlogBundle:Blog:index.html.twig',
                    array(
                        'articles' => $tArticles
                    )
                );
            }
        }

        return $this->render('TheBlogBlogBundle:Blog:recherchearticle.html.twig',
            array(
                'article' => $tArticles,
                'formrecherche' => $oTheform->createView()
            )
        );
    }

    public function detailsAction( $id )
    {

        $oEntityManager     = $this->getDoctrine()->getManager();
        $tArticles          = $oEntityManager->getRepository('TheBlogBlogBundle:Article')->find( $id );

        $oEvent             = new ArticleLoadEvent( $tArticles );

        $this->get('event_dispatcher')->dispatch(ArticleCheckerEvents::onPageLoad, $oEvent);

        $oCommentaire       = new Commentaires();

        $oTheform           = $this->createForm(new CommentairesType(), $oCommentaire);

        $oRequest           = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->bind($oRequest);

            if ( $oTheform->isValid() )
            {
                $oCommentaire->setArticle( $tArticles );
                $oCommentaire->setDate(new \DateTime());

                $oEntityManager->persist($oCommentaire);
                $oEntityManager->flush();

                $this->get('session')->getFlashBag()->add('success', 'Votre commentaire a bien été ajouté');

                return $this->redirect($this->generateUrl('theblog_details', array('id' => $id)));
            }
        }

        return $this->render('TheBlogBlogBundle:Blog:details.html.twig',
            array(
                    'article' => $tArticles,
                    'formcommentaire' => $oTheform->createView()
            )
        );
    }

    public function aboutAction()
    {
        return $this->render('TheBlogBlogBundle:Blog:about.html.twig');
    }

    public function photoAction()
    {
        return $this->render('TheBlogBlogBundle:Blog:photo.html.twig');
    }

    public function archivesAction()
    {
        return $this->render('TheBlogBlogBundle:Blog:archives.html.twig');
    }

    public function contactAction()
    {
        $oMessage       = new MessageInfo();

        $oTheform   = $this->createForm(new MessageInfoType(), $oMessage);

        $oRequest       = $this->get('request');

        if ($oRequest->getMethod() == 'POST' )
        {
            $oTheform->bind($oRequest);

            if ( $oTheform->isValid() )
            {
                $oEntityManager = $this->getDoctrine()->getManager();
                $oEntityManager->persist($oMessage);
                $oEntityManager->flush();

                $this->get('session')->getFlashBag()->add('success', 'Votre message a bien été envoyé à nos administrateurs');

                return $this->redirect($this->generateUrl('theblog_contact'));
            }
        }


        return $this->render('TheBlogBlogBundle:Blog:contact.html.twig',
            array(
                'theform' => $oTheform->createView()
            )
        );
    }
}
