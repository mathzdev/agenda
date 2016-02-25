<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsUserTipoRel
 *
 * @ORM\Table(name="cms_user_tipo_rel")
 * @ORM\Entity
 */
class CmsUserTipoRel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tprel_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tprelId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer", nullable=false)
     */
    private $usrId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_usr_id", type="integer", nullable=false)
     */
    private $tpUsrId;



    /**
     * Get tprelId
     *
     * @return integer 
     */
    public function getTprelId()
    {
        return $this->tprelId;
    }

    /**
     * Set usrId
     *
     * @param integer $usrId
     * @return CmsUserTipoRel
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
     * Set tpUsrId
     *
     * @param integer $tpUsrId
     * @return CmsUserTipoRel
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
