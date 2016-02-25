<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsTipoPermissao
 *
 * @ORM\Table(name="cms_tipo_permissao", indexes={@ORM\Index(name="tab_id", columns={"tab_id", "tp_usr_id"})})
 * @ORM\Entity
 */
class CmsTipoPermissao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tp_per_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tpPerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab_id", type="integer", nullable=false)
     */
    private $tabId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_usr_id", type="integer", nullable=false)
     */
    private $tpUsrId;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_edita", type="string", nullable=false)
     */
    private $tabEdita;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_insere", type="string", nullable=false)
     */
    private $tabInsere;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_deleta", type="string", nullable=false)
     */
    private $tabDeleta;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_visualiza", type="string", nullable=false)
     */
    private $tabVisualiza;



    /**
     * Get tpPerId
     *
     * @return integer 
     */
    public function getTpPerId()
    {
        return $this->tpPerId;
    }

    /**
     * Set tabId
     *
     * @param integer $tabId
     * @return CmsTipoPermissao
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
     * Set tpUsrId
     *
     * @param integer $tpUsrId
     * @return CmsTipoPermissao
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

    /**
     * Set tabEdita
     *
     * @param string $tabEdita
     * @return CmsTipoPermissao
     */
    public function setTabEdita($tabEdita)
    {
        $this->tabEdita = $tabEdita;

        return $this;
    }

    /**
     * Get tabEdita
     *
     * @return string 
     */
    public function getTabEdita()
    {
        return $this->tabEdita;
    }

    /**
     * Set tabInsere
     *
     * @param string $tabInsere
     * @return CmsTipoPermissao
     */
    public function setTabInsere($tabInsere)
    {
        $this->tabInsere = $tabInsere;

        return $this;
    }

    /**
     * Get tabInsere
     *
     * @return string 
     */
    public function getTabInsere()
    {
        return $this->tabInsere;
    }

    /**
     * Set tabDeleta
     *
     * @param string $tabDeleta
     * @return CmsTipoPermissao
     */
    public function setTabDeleta($tabDeleta)
    {
        $this->tabDeleta = $tabDeleta;

        return $this;
    }

    /**
     * Get tabDeleta
     *
     * @return string 
     */
    public function getTabDeleta()
    {
        return $this->tabDeleta;
    }

    /**
     * Set tabVisualiza
     *
     * @param string $tabVisualiza
     * @return CmsTipoPermissao
     */
    public function setTabVisualiza($tabVisualiza)
    {
        $this->tabVisualiza = $tabVisualiza;

        return $this;
    }

    /**
     * Get tabVisualiza
     *
     * @return string 
     */
    public function getTabVisualiza()
    {
        return $this->tabVisualiza;
    }
}
