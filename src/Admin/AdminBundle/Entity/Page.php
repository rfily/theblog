<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\PageRepository")
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**     
     * @Assert\NotBlank()
     *
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     *
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=255)
     */
    private $suffix;

    /**
     * @Assert\NotBlank()
     * @var string
     *
     * @ORM\Column(name="meta", type="text")
     */
    private $meta;

    /**
     *
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Page
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     *
     * @return Page
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set meta
     *
     * @param string $meta
     *
     * @return Page
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Get meta
     *
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Page
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
