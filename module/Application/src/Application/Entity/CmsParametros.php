<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsParametros
 *
 * @ORM\Table(name="cms_parametros")
 * @ORM\Entity
 */
class CmsParametros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="param_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paramId;

    /**
     * @var integer
     *
     * @ORM\Column(name="param_tp_id", type="integer", nullable=true)
     */
    private $paramTpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab_id", type="integer", nullable=false)
     */
    private $tabId;

    /**
     * @var string
     *
     * @ORM\Column(name="param_campo", type="string", length=100, nullable=false)
     */
    private $paramCampo;

    /**
     * @var string
     *
     * @ORM\Column(name="param_lista", type="string", length=100, nullable=true)
     */
    private $paramLista;

    /**
     * @var string
     *
     * @ORM\Column(name="param_form", type="string", length=100, nullable=true)
     */
    private $paramForm;

    /**
     * @var integer
     *
     * @ORM\Column(name="param_ordem", type="integer", nullable=false)
     */
    private $paramOrdem;

    /**
     * @var string
     *
     * @ORM\Column(name="param_status", type="string", nullable=false)
     */
    private $paramStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="param_impresso", type="string", nullable=true)
     */
    private $paramImpresso;

    /**
     * @var string
     *
     * @ORM\Column(name="param_comentario", type="string", length=255, nullable=true)
     */
    private $paramComentario;



    /**
     * Get paramId
     *
     * @return integer 
     */
    public function getParamId()
    {
        return $this->paramId;
    }

    /**
     * Set paramTpId
     *
     * @param integer $paramTpId
     * @return CmsParametros
     */
    public function setParamTpId($paramTpId)
    {
        $this->paramTpId = $paramTpId;

        return $this;
    }

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
     * Set tabId
     *
     * @param integer $tabId
     * @return CmsParametros
     */
    public function setTabId($tabId)
    {
        $this->tabId = $tabId;

        return $this;
    }

    /**
     * Get tabId
     *
     * @return integer 
     */
    public function getTabId()
    {
        return $this->tabId;
    }

    /**
     * Set paramCampo
     *
     * @param string $paramCampo
     * @return CmsParametros
     */
    public function setParamCampo($paramCampo)
    {
        $this->paramCampo = $paramCampo;

        return $this;
    }

    /**
     * Get paramCampo
     *
     * @return string 
     */
    public function getParamCampo()
    {
        return $this->paramCampo;
    }

    /**
     * Set paramLista
     *
     * @param string $paramLista
     * @return CmsParametros
     */
    public function setParamLista($paramLista)
    {
        $this->paramLista = $paramLista;

        return $this;
    }

    /**
     * Get paramLista
     *
     * @return string 
     */
    public function getParamLista()
    {
        return $this->paramLista;
    }

    /**
     * Set paramForm
     *
     * @param string $paramForm
     * @return CmsParametros
     */
    public function setParamForm($paramForm)
    {
        $this->paramForm = $paramForm;

        return $this;
    }

    /**
     * Get paramForm
     *
     * @return string 
     */
    public function getParamForm()
    {
        return $this->paramForm;
    }

    /**
     * Set paramOrdem
     *
     * @param integer $paramOrdem
     * @return CmsParametros
     */
    public function setParamOrdem($paramOrdem)
    {
        $this->paramOrdem = $paramOrdem;

        return $this;
    }

    /**
     * Get paramOrdem
     *
     * @return integer 
     */
    public function getParamOrdem()
    {
        return $this->paramOrdem;
    }

    /**
     * Set paramStatus
     *
     * @param string $paramStatus
     * @return CmsParametros
     */
    public function setParamStatus($paramStatus)
    {
        $this->paramStatus = $paramStatus;

        return $this;
    }

    /**
     * Get paramStatus
     *
     * @return string 
     */
    public function getParamStatus()
    {
        return $this->paramStatus;
    }

    /**
     * Set paramImpresso
     *
     * @param string $paramImpresso
     * @return CmsParametros
     */
    public function setParamImpresso($paramImpresso)
    {
        $this->paramImpresso = $paramImpresso;

        return $this;
    }

    /**
     * Get paramImpresso
     *
     * @return string 
     */
    public function getParamImpresso()
    {
        return $this->paramImpresso;
    }

    /**
     * Set paramComentario
     *
     * @param string $paramComentario
     * @return CmsParametros
     */
    public function setParamComentario($paramComentario)
    {
        $this->paramComentario = $paramComentario;

        return $this;
    }

    /**
     * Get paramComentario
     *
     * @return string 
     */
    public function getParamComentario()
    {
        return $this->paramComentario;
    }
}
