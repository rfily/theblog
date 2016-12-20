<?php

namespace TheBlog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="TheBlog\BlogBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


    /**
     * @var string
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @ORM\OneToOne(targetEntity="TheBlog\BlogBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="TheBlog\BlogBundle\Entity\Commentaires", mappedBy="article")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrevue", type="integer", options={"default":0})
     */
    private $nombrevue;

    /**
     * @ORM\ManyToOne(targetEntity="TheBlog\BlogBundle\Entity\Categories", inversedBy="article")
     */
    private $categories;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
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
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
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

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param \TheBlog\BlogBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\TheBlog\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \TheBlog\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add commentaires
     *
     * @param \TheBlog\BlogBundle\Entity\Commentaires $commentaires
     * @return Article
     */
    public function addCommentaire(\TheBlog\BlogBundle\Entity\Commentaires $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \TheBlog\BlogBundle\Entity\Commentaires $commentaires
     */
    public function removeCommentaire(\TheBlog\BlogBundle\Entity\Commentaires $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set categories
     *
     * @param \TheBlog\BlogBundle\Entity\Categories $categories
     * @return Article
     */
    public function setCategories(\TheBlog\BlogBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \TheBlog\BlogBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set nombrevue
     *
     * @param integer $nombrevue
     *
     * @return Article
     */
    public function setNombrevue($nombrevue)
    {
        $this->nombrevue = $nombrevue;

        return $this;
    }

    /**
     * Get nombrevue
     *
     * @return integer
     */
    public function getNombrevue()
    {
        return $this->nombrevue;
    }
}
