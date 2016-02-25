<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsParametroTipo
 *
 * @ORM\Table(name="cms_parametro_tipo")
 * @ORM\Entity
 */
class CmsParametroTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="param_tp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paramTpId;

    /**
     * @var string
     *
     * @ORM\Column(name="param_tp_nome", type="string", length=50, nullable=false)
     */
    private $paramTpNome;

    /**
     * @var string
     *
     * @ORM\Column(name="param_tp_desc", type="string", length=50, nullable=false)
     */
    private $paramTpDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="param_tp_campos", type="string", length=255, nullable=false)
     */
    private $paramTpCampos;



    /**
     * Get paramTpId
     *
     * @return integer 
     */
    public function getParamTpId()
    {
        return $this->paramTpId;
    }

    /**
     * Set paramTpNome
     *
     * @param string $paramTpNome
     * @return CmsParametroTipo
     */
    public function setParamTpNome($paramTpNome)
    {
        $this->paramTpNome = $paramTpNome;

        return $this;
    }

    /**
     * Get paramTpNome
     *
     * @return string 
     */
    public function getParamTpNome()
    {
        return $this->paramTpNome;
    }

    /**
     * Set paramTpDesc
     *
     * @param string $paramTpDesc
     * @return CmsParametroTipo
     */
    public function setParamTpDesc($paramTpDesc)
    {
        $this->paramTpDesc = $paramTpDesc;

        return $this;
    }

    /**
     * Get paramTpDesc
     *
     * @return string 
     */
    public function getParamTpDesc()
    {
        return $this->paramTpDesc;
    }

    /**
     * Set paramTpCampos
     *
     * @param string $paramTpCampos
     * @return CmsParametroTipo
     */
    public function setParamTpCampos($paramTpCampos)
    {
        $this->paramTpCampos = $paramTpCampos;

        return $this;
    }

    /**
     * Get paramTpCampos
     *
     * @return string 
     */
    public function getParamTpCampos()
    {
        return $this->paramTpCampos;
    }
}
