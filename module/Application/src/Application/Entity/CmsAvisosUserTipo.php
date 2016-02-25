<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsAvisosUserTipo
 *
 * @ORM\Table(name="cms_avisos_user_tipo")
 * @ORM\Entity
 */
class CmsAvisosUserTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aviusrtp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aviusrtpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="avi_id", type="integer", nullable=false)
     */
    private $aviId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_usr_id", type="integer", nullable=false)
     */
    private $tpUsrId;



    /**
     * Get aviusrtpId
     *
     * @return integer 
     */
    public function getAviusrtpId()
    {
        return $this->aviusrtpId;
    }

    /**
     * Set aviId
     *
     * @param integer $aviId
     * @return CmsAvisosUserTipo
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
     * Set tpUsrId
     *
     * @param integer $tpUsrId
     * @return CmsAvisosUserTipo
     */
    public function setTpUsrId($tpUsrId)
    {
        $this->tpUsrId = $tpUsrId;

        return $this;
    }

    /**
     * Get tpUsrId
     *
     * @return integer 
     */
    public function getTpUsrId()
    {
        return $this->tpUsrId;
    }
}
