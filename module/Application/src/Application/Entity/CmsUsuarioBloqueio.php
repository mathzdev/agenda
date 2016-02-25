<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsUsuarioBloqueio
 *
 * @ORM\Table(name="cms_usuario_bloqueio")
 * @ORM\Entity
 */
class CmsUsuarioBloqueio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="blo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bloId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer", nullable=false)
     */
    private $usrId;

    /**
     * @var string
     *
     * @ORM\Column(name="blo_motivo", type="text", nullable=false)
     */
    private $bloMotivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="blo_dtfim", type="bigint", nullable=false)
     */
    private $bloDtfim;



    /**
     * Get bloId
     *
     * @return integer 
     */
    public function getBloId()
    {
        return $this->bloId;
    }

    /**
     * Set usrId
     *
     * @param integer $usrId
     * @return CmsUsuarioBloqueio
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
     * Set bloMotivo
     *
     * @param string $bloMotivo
     * @return CmsUsuarioBloqueio
     */
    public function setBloMotivo($bloMotivo)
    {
        $this->bloMotivo = $bloMotivo;

        return $this;
    }

    /**
     * Get bloMotivo
     *
     * @return string 
     */
    public function getBloMotivo()
    {
        return $this->bloMotivo;
    }

    /**
     * Set bloDtfim
     *
     * @param integer $bloDtfim
     * @return CmsUsuarioBloqueio
     */
    public function setBloDtfim($bloDtfim)
    {
        $this->bloDtfim = $bloDtfim;

        return $this;
    }

    /**
     * Get bloDtfim
     *
     * @return integer 
     */
    public function getBloDtfim()
    {
        return $this->bloDtfim;
    }
}
