<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Objet
 *
 * @ORM\Table(name="objet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObjetRepository")
 */
class Objet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Exclude
     */
    private $id;

    /**
     * Colone contenant le nom de l'objet
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     *
     */
    private $name;

    /**
     * Le prix indiqué est en euros ou pas...
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="date_vente", type="string", length=255)
     */
    private $dateVente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_online", type="datetime")
     */
    private $dateOnline;

    /**
     * @ORM\ManyToMany()any(targetEntity="AppBundle\Entity\Acheteur", cascade={"persist", "remove"})
     *  @var Acheteur
     *
     * @ORM\Column(name="acheteur")
     */
    private $acheteur;


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
     * Set name
     *
     * @param string $name
     * @return Objet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Objet
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateVente
     *
     * @param string $dateVente
     * @return Objet
     */
    public function setDateVente($dateVente)
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    /**
     * Get dateVente
     *
     * @return string 
     */
    public function getDateVente()
    {
        return $this->dateVente;
    }

    /**
     * Set dateOnline
     *
     * @param \DateTime $dateOnline
     * @return Objet
     */
    public function setDateOnline($dateOnline)
    {
        $this->dateOnline = $dateOnline;

        return $this;
    }

    /**
     * Get dateOnline
     *
     * @return \DateTime 
     */
    public function getDateOnline()
    {
        return $this->dateOnline;
    }

    /**
     * Set vendeur
     *
     * @param string $vendeur
     * @return Objet
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string 
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * @return Acheteur
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }

    /**
     * @param Acheteur $acheteur
     * @return $this
     */
    public function setAcheteur($acheteur)
    {
        $this->acheteur = $acheteur;
        return $this;
    }
}
