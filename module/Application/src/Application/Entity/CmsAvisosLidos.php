<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsAvisosLidos
 *
 * @ORM\Table(name="cms_avisos_lidos")
 * @ORM\Entity
 */
class CmsAvisosLidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="avilid_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $avilidId;

    /**
     * @var integer
     *
     * @ORM\Column(name="avi_id", type="integer", nullable=false)
     */
    private $aviId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer", nullable=false)
     */
    private $usrId;

    /**
     * @var integer
     *
     * @ORM\Column(name="avilid_data", type="bigint", nullable=false)
     */
    private $avilidData;



    /**
     * Get avilidId
     *
     * @return integer 
     */
    public function getAvilidId()
    {
        return $this->avilidId;
    }

    /**
     * Set aviId
     *
     * @param integer $aviId
     * @return CmsAvisosLidos
     */
    public function setAviId($aviId)
    {
        $this->aviId = $aviId;

        return $this;
    }

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
     * Set usrId
     *
     * @param integer $usrId
     * @return CmsAvisosLidos
     */
    public function setUsrId($usrId)
    {
        $this->usrId = $usrId;

        return $this;
    }

    /**
     * Get usrId
     *
     * @return integer 
     */
    public function getUsrId()
    {
        return $this->usrId;
    }

    /**
     * Set avilidData
     *
     * @param integer $avilidData
     * @return CmsAvisosLidos
     */
    public function setAvilidData($avilidData)
    {
        $this->avilidData = $avilidData;

        return $this;
    }

    /**
     * Get avilidData
     *
     * @return integer 
     */
    public function getAvilidData()
    {
        return $this->avilidData;
    }
}
