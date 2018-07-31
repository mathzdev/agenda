<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCategoriaProduto
 *
 * @ORM\Table(name="tb_categoria_produto")
 * @ORM\Entity
 */
class TbCategoriaProduto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_categoria", type="string", length=200, nullable=true)
     */
    private $nomeCategoria;



    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nomeCategoria
     *
     * @param string $nomeCategoria
     * @return TbCategoriaProduto
     */
    public function setNomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;

        return $this;
    }

    /**
     * Get nomeCategoria
     *
     * @return string 
     */
    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }
}
