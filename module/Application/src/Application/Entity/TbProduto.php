<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbProduto
 *
 * @ORM\Table(name="tb_produto", indexes={@ORM\Index(name="fk_id_categoria_produto_idx", columns={"id_categoria_produto"})})
 * @ORM\Entity
 */
class TbProduto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_cardapio", type="integer", nullable=false)
     */
    private $codCardapio;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="resumo", type="string", length=200, nullable=true)
     */
    private $resumo;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=45, nullable=true)
     */
    private $valor;

    /**
     * @var \Application\Entity\TbCategoriaProduto
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\TbCategoriaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria_produto", referencedColumnName="id_categoria")
     * })
     */
    private $idCategoriaProduto;



    /**
     * Get idProduto
     *
     * @return integer
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set codCardapio
     *
     * @param string $codCardapio
     * @return TbProduto
     */
    public function setcodCardapio($codCardapio)
    {
        $this->codCardapio = $codCardapio;

        return $this;
    }

    /**
     * Get codCardapio
     *
     * @return string
     */
    public function getcodCardapio()
    {
        return $this->codCardapio;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return TbProduto
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return TbProduto
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return TbProduto
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set resumo
     *
     * @param string $resumo
     * @return TbProduto
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get resumo
     *
     * @return string
     */
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return TbProduto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idCategoriaProduto
     *
     * @param \Application\Entity\TbCategoriaProduto $idCategoriaProduto
     * @return TbProduto
     */
    public function setIdCategoriaProduto(\Application\Entity\TbCategoriaProduto $idCategoriaProduto = null)
    {
        $this->idCategoriaProduto = $idCategoriaProduto;

        return $this;
    }

    /**
     * Get idCategoriaProduto
     *
     * @return \Application\Entity\TbCategoriaProduto
     */
    public function getIdCategoriaProduto()
    {
        return $this->idCategoriaProduto;
    }
}
