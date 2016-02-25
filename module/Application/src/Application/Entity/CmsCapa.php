<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsCapa
 *
 * @ORM\Table(name="cms_capa")
 * @ORM\Entity
 */
class CmsCapa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cap_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $capId;

    /**
     * @var string
     *
     * @ORM\Column(name="cap_nome", type="string", length=255, nullable=false)
     */
    private $capNome;

    /**
     * @var string
     *
     * @ORM\Column(name="cap_texto", type="text", nullable=false)
     */
    private $capTexto;

    /**
     * @var string
     *
     * @ORM\Column(name="cap_status", type="string", nullable=false)
     */
    private $capStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="cap_ordem", type="integer", nullable=false)
     */
    private $capOrdem;



    /**
     * Get capId
     *
     * @return integer 
     */
    public function getCapId()
    {
        return $this->capId;
    }

    /**
     * Set capNome
     *
     * @param string $capNome
     * @return CmsCapa
     */
    public function setCapNome($capNome)
    {
        $this->capNome = $capNome;

        return $this;
    }

    /**
     * Get capNome
     *
     * @return string 
     */
    public function getCapNome()
    {
        return $this->capNome;
    }

    /**
     * Set capTexto
     *
     * @param string $capTexto
     * @return CmsCapa
     */
    public function setCapTexto($capTexto)
    {
        $this->capTexto = $capTexto;

        return $this;
    }

    /**
     * Get capTexto
     *
     * @return string 
     */
    public function getCapTexto()
    {
        return $this->capTexto;
    }

    /**
     * Set capStatus
     *
     * @param string $capStatus
     * @return CmsCapa
     */
    public function setCapStatus($capStatus)
    {
        $this->capStatus = $capStatus;

        return $this;
    }

    /**
     * Get capStatus
     *
     * @return string 
     */
    public function getCapStatus()
    {
        return $this->capStatus;
    }

    /**
     * Set capOrdem
     *
     * @param integer $capOrdem
     * @return CmsCapa
     */
    public function setCapOrdem($capOrdem)
    {
        $this->capOrdem = $capOrdem;

        return $this;
    }

    /**
     * Get capOrdem
     *
     * @return integer 
     */
    public function getCapOrdem()
    {
        return $this->capOrdem;
    }
}
