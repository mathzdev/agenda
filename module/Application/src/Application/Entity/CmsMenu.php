<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsMenu
 *
 * @ORM\Table(name="cms_menu")
 * @ORM\Entity
 */
class CmsMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_nome", type="string", length=255, nullable=false)
     */
    private $menuNome;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_ordem", type="integer", nullable=false)
     */
    private $menuOrdem;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_status", type="string", nullable=false)
     */
    private $menuStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_icone", type="string", length=100, nullable=false)
     */
    private $menuIcone;



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
     * Set menuNome
     *
     * @param string $menuNome
     * @return CmsMenu
     */
    public function setMenuNome($menuNome)
    {
        $this->menuNome = $menuNome;

        return $this;
    }

    /**
     * Get menuNome
     *
     * @return string 
     */
    public function getMenuNome()
    {
        return $this->menuNome;
    }

    /**
     * Set menuOrdem
     *
     * @param integer $menuOrdem
     * @return CmsMenu
     */
    public function setMenuOrdem($menuOrdem)
    {
        $this->menuOrdem = $menuOrdem;

        return $this;
    }

    /**
     * Get menuOrdem
     *
     * @return integer 
     */
    public function getMenuOrdem()
    {
        return $this->menuOrdem;
    }

    /**
     * Set menuStatus
     *
     * @param string $menuStatus
     * @return CmsMenu
     */
    public function setMenuStatus($menuStatus)
    {
        $this->menuStatus = $menuStatus;

        return $this;
    }

    /**
     * Get menuStatus
     *
     * @return string 
     */
    public function getMenuStatus()
    {
        return $this->menuStatus;
    }

    /**
     * Set menuIcone
     *
     * @param string $menuIcone
     * @return CmsMenu
     */
    public function setMenuIcone($menuIcone)
    {
        $this->menuIcone = $menuIcone;

        return $this;
    }

    /**
     * Get menuIcone
     *
     * @return string 
     */
    public function getMenuIcone()
    {
        return $this->menuIcone;
    }
}
