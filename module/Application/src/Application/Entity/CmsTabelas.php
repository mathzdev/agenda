<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsTabelas
 *
 * @ORM\Table(name="cms_tabelas")
 * @ORM\Entity
 */
class CmsTabelas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tab_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tabId;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_nome", type="string", length=70, nullable=false)
     */
    private $tabNome;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_arquivo", type="string", length=255, nullable=true)
     */
    private $tabArquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_tabela", type="string", length=70, nullable=true)
     */
    private $tabTabela;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_campo", type="string", length=255, nullable=true)
     */
    private $tabCampo;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_target", type="string", nullable=false)
     */
    private $tabTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_link", type="string", nullable=false)
     */
    private $tabLink;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_status", type="string", nullable=false)
     */
    private $tabStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab_ordem", type="integer", nullable=false)
     */
    private $tabOrdem;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_insere", type="string", nullable=true)
     */
    private $tabInsere;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_edita", type="string", nullable=true)
     */
    private $tabEdita;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_deleta", type="string", nullable=true)
     */
    private $tabDeleta;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_view", type="string", nullable=true)
     */
    private $tabView;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_ajuda", type="text", nullable=true)
     */
    private $tabAjuda;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_user", type="string", nullable=false)
     */
    private $tabUser;



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
     * Set menuId
     *
     * @param integer $menuId
     * @return CmsTabelas
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set tabNome
     *
     * @param string $tabNome
     * @return CmsTabelas
     */
    public function setTabNome($tabNome)
    {
        $this->tabNome = $tabNome;

        return $this;
    }

    /**
     * Get tabNome
     *
     * @return string 
     */
    public function getTabNome()
    {
        return $this->tabNome;
    }

    /**
     * Set tabArquivo
     *
     * @param string $tabArquivo
     * @return CmsTabelas
     */
    public function setTabArquivo($tabArquivo)
    {
        $this->tabArquivo = $tabArquivo;

        return $this;
    }

    /**
     * Get tabArquivo
     *
     * @return string 
     */
    public function getTabArquivo()
    {
        return $this->tabArquivo;
    }

    /**
     * Set tabTabela
     *
     * @param string $tabTabela
     * @return CmsTabelas
     */
    public function setTabTabela($tabTabela)
    {
        $this->tabTabela = $tabTabela;

        return $this;
    }

    /**
     * Get tabTabela
     *
     * @return string 
     */
    public function getTabTabela()
    {
        return $this->tabTabela;
    }

    /**
     * Set tabCampo
     *
     * @param string $tabCampo
     * @return CmsTabelas
     */
    public function setTabCampo($tabCampo)
    {
        $this->tabCampo = $tabCampo;

        return $this;
    }

    /**
     * Get tabCampo
     *
     * @return string 
     */
    public function getTabCampo()
    {
        return $this->tabCampo;
    }

    /**
     * Set tabTarget
     *
     * @param string $tabTarget
     * @return CmsTabelas
     */
    public function setTabTarget($tabTarget)
    {
        $this->tabTarget = $tabTarget;

        return $this;
    }

    /**
     * Get tabTarget
     *
     * @return string 
     */
    public function getTabTarget()
    {
        return $this->tabTarget;
    }

    /**
     * Set tabLink
     *
     * @param string $tabLink
     * @return CmsTabelas
     */
    public function setTabLink($tabLink)
    {
        $this->tabLink = $tabLink;

        return $this;
    }

    /**
     * Get tabLink
     *
     * @return string 
     */
    public function getTabLink()
    {
        return $this->tabLink;
    }

    /**
     * Set tabStatus
     *
     * @param string $tabStatus
     * @return CmsTabelas
     */
    public function setTabStatus($tabStatus)
    {
        $this->tabStatus = $tabStatus;

        return $this;
    }

    /**
     * Get tabStatus
     *
     * @return string 
     */
    public function getTabStatus()
    {
        return $this->tabStatus;
    }

    /**
     * Set tabOrdem
     *
     * @param integer $tabOrdem
     * @return CmsTabelas
     */
    public function setTabOrdem($tabOrdem)
    {
        $this->tabOrdem = $tabOrdem;

        return $this;
    }

    /**
     * Get tabOrdem
     *
     * @return integer 
     */
    public function getTabOrdem()
    {
        return $this->tabOrdem;
    }

    /**
     * Set tabInsere
     *
     * @param string $tabInsere
     * @return CmsTabelas
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
     * Set tabEdita
     *
     * @param string $tabEdita
     * @return CmsTabelas
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
     * Set tabDeleta
     *
     * @param string $tabDeleta
     * @return CmsTabelas
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
     * Set tabView
     *
     * @param string $tabView
     * @return CmsTabelas
     */
    public function setTabView($tabView)
    {
        $this->tabView = $tabView;

        return $this;
    }

    /**
     * Get tabView
     *
     * @return string 
     */
    public function getTabView()
    {
        return $this->tabView;
    }

    /**
     * Set tabAjuda
     *
     * @param string $tabAjuda
     * @return CmsTabelas
     */
    public function setTabAjuda($tabAjuda)
    {
        $this->tabAjuda = $tabAjuda;

        return $this;
    }

    /**
     * Get tabAjuda
     *
     * @return string 
     */
    public function getTabAjuda()
    {
        return $this->tabAjuda;
    }

    /**
     * Set tabUser
     *
     * @param string $tabUser
     * @return CmsTabelas
     */
    public function setTabUser($tabUser)
    {
        $this->tabUser = $tabUser;

        return $this;
    }

    /**
     * Get tabUser
     *
     * @return string 
     */
    public function getTabUser()
    {
        return $this->tabUser;
    }
}
