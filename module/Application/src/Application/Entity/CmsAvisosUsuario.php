<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsAvisosUsuario
 *
 * @ORM\Table(name="cms_avisos_usuario")
 * @ORM\Entity
 */
class CmsAvisosUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aviusr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aviusrId;

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
     * Get aviusrId
     *
     * @return integer 
     */
    public function getAviusrId()
    {
        return $this->aviusrId;
    }

    /**
     * Set aviId
     *
     * @param integer $aviId
     * @return CmsAvisosUsuario
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
     * @return CmsAvisosUsuario
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
}
