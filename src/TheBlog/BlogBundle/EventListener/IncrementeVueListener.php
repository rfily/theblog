<?php
/**
 * Created by PhpStorm.
 * User: Niaina
 * Date: 16/12/2016
 * Time: 13:16
 */

namespace TheBlog\BlogBundle\EventListener;


class IncrementeVueListener
{
    protected $oEm;
    protected $oServiceContainer;

    public function __construct( $_oEm, $_Sc )
    {

        $this->oEm          = $_oEm;
        $this->oServiceContainer   = $_Sc;
    }

    protected function doIncrement()
    {
        $TParams            = $this->oServiceContainer->get('request')->attributes->get('_route_params');
        $iIdArticle         = $TParams['id'];

        $tArticles          = $this->oEm->getRepository('TheBlogBlogBundle:Article')->find( $iIdArticle );
        $tArticles->setNombrevue( $tArticles->getNombrevue() + 1 );

        $this->oEm->persist($tArticles);
        $this->oEm->flush();
    }

    public function onPageLoad()
    {
        $this->doIncrement();
    }
}