<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbGaleriaInstagram
 *
 * @ORM\Table(name="tb_galeria_instagram")
 * @ORM\Entity
 */
class TbGaleriaInstagram
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="exibe", type="string", nullable=false)
     */
    private $exibe;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="text", nullable=false)
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="text", nullable=false)
     */
    private $thumb;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="text", nullable=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="text", nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="likes", type="text", nullable=false)
     */
    private $likes;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="id_insta", type="string", length=500, nullable=false)
     */
    private $idInsta;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb_interno", type="text", nullable=false)
     */
    private $thumbInterno;



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
     * Set exibe
     *
     * @param string $exibe
     * @return TbGaleriaInstagram
     */
    public function setExibe($exibe)
    {
        $this->exibe = $exibe;

        return $this;
    }

    /**
     * Get exibe
     *
     * @return string 
     */
    public function getExibe()
    {
        return $this->exibe;
    }

    /**
     * Set src
     *
     * @param string $src
     * @return TbGaleriaInstagram
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return TbGaleriaInstagram
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TbGaleriaInstagram
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return TbGaleriaInstagram
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TbGaleriaInstagram
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set likes
     *
     * @param string $likes
     * @return TbGaleriaInstagram
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return string 
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return TbGaleriaInstagram
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set idInsta
     *
     * @param string $idInsta
     * @return TbGaleriaInstagram
     */
    public function setIdInsta($idInsta)
    {
        $this->idInsta = $idInsta;

        return $this;
    }

    /**
     * Get idInsta
     *
     * @return string 
     */
    public function getIdInsta()
    {
        return $this->idInsta;
    }

    /**
     * Set thumbInterno
     *
     * @param string $thumbInterno
     * @return TbGaleriaInstagram
     */
    public function setThumbInterno($thumbInterno)
    {
        $this->thumbInterno = $thumbInterno;

        return $this;
    }

    /**
     * Get thumbInterno
     *
     * @return string 
     */
    public function getThumbInterno()
    {
        return $this->thumbInterno;
    }
}
