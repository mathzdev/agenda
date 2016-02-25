<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCantor
 *
 * @ORM\Table(name="tb_cantor")
 * @ORM\Entity
 */
class TbCantor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cantor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCantor;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cantor", type="string", length=500, nullable=false)
     */
    private $nomeCantor;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_cantor", type="string", length=500, nullable=false)
     */
    private $fotoCantor;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_cantor", type="text", nullable=false)
     */
    private $descricaoCantor;



    /**
     * Get idCantor
     *
     * @return integer 
     */
    public function getIdCantor()
    {
        return $this->idCantor;
    }

    /**
     * Set nomeCantor
     *
     * @param string $nomeCantor
     * @return TbCantor
     */
    public function setNomeCantor($nomeCantor)
    {
        $this->nomeCantor = $nomeCantor;

        return $this;
    }

    /**
     * Get nomeCantor
     *
     * @return string 
     */
    public function getNomeCantor()
    {
        return $this->nomeCantor;
    }

    /**
     * Set fotoCantor
     *
     * @param string $fotoCantor
     * @return TbCantor
     */
    public function setFotoCantor($fotoCantor)
    {
        $this->fotoCantor = $fotoCantor;

        return $this;
    }

    /**
     * Get fotoCantor
     *
     * @return string 
     */
    public function getFotoCantor()
    {
        return $this->fotoCantor;
    }

    /**
     * Set descricaoCantor
     *
     * @param string $descricaoCantor
     * @return TbCantor
     */
    public function setDescricaoCantor($descricaoCantor)
    {
        $this->descricaoCantor = $descricaoCantor;

        return $this;
    }

    /**
     * Get descricaoCantor
     *
     * @return string 
     */
    public function getDescricaoCantor()
    {
        return $this->descricaoCantor;
    }
}
