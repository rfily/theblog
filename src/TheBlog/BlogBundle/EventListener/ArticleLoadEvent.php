<?php

namespace TheBlog\BlogBundle\EventListener;


use Symfony\Component\EventDispatcher\Event;

class ArticleLoadEvent extends Event
{
    protected $article;

    public function __construct( $article )
    {
        $this->article  = $article;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }
}