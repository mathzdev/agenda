<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsAvisos
 *
 * @ORM\Table(name="cms_avisos")
 * @ORM\Entity
 */
class CmsAvisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="avi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aviId;

    /**
     * @var string
     *
     * @ORM\Column(name="avi_titulo", type="string", length=255, nullable=false)
     */
    private $aviTitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="avi_aviso", type="text", nullable=false)
     */
    private $aviAviso;

    /**
     * @var string
     *
     * @ORM\Column(name="avi_status", type="string", nullable=false)
     */
    private $aviStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="avi_data", type="bigint", nullable=false)
     */
    private $aviData;



    /**
     * Get aviId
     *
     * @return integer 
     */
    public function getAviId()
    {
        return $this->aviId;
    }

    /**
     * Set aviTitulo
     *
     * @param string $aviTitulo
     * @return CmsAvisos
     */
    public function setAviTitulo($aviTitulo)
    {
        $this->aviTitulo = $aviTitulo;

        return $this;
    }

    /**
     * Get aviTitulo
     *
     * @return string 
     */
    public function getAviTitulo()
    {
        return $this->aviTitulo;
    }

    /**
     * Set aviAviso
     *
     * @param string $aviAviso
     * @return CmsAvisos
     */
    public function setAviAviso($aviAviso)
    {
        $this->aviAviso = $aviAviso;

        return $this;
    }

    /**
     * Get aviAviso
     *
     * @return string 
     */
    public function getAviAviso()
    {
        return $this->aviAviso;
    }

    /**
     * Set aviStatus
     *
     * @param string $aviStatus
     * @return CmsAvisos
     */
    public function setAviStatus($aviStatus)
    {
        $this->aviStatus = $aviStatus;

        return $this;
    }

    /**
     * Get aviStatus
     *
     * @return string 
     */
    public function getAviStatus()
    {
        return $this->aviStatus;
    }

    /**
     * Set aviData
     *
     * @param integer $aviData
     * @return CmsAvisos
     */
    public function setAviData($aviData)
    {
        $this->aviData = $aviData;

        return $this;
    }

    /**
     * Get aviData
     *
     * @return integer 
     */
    public function getAviData()
    {
        return $this->aviData;
    }
}
