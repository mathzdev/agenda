<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsPerRelacionadoDuplo
 *
 * @ORM\Table(name="cms_per_relacionado_duplo", indexes={@ORM\Index(name="prd_pai1", columns={"prd_pai1", "prd_pai2"})})
 * @ORM\Entity
 */
class CmsPerRelacionadoDuplo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prd_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prdId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prd_pai1", type="integer", nullable=false)
     */
    private $prdPai1;

    /**
     * @var integer
     *
     * @ORM\Column(name="prd_pai2", type="integer", nullable=false)
     */
    private $prdPai2;

    /**
     * @var string
     *
     * @ORM\Column(name="prd_tabela", type="string", length=100, nullable=false)
     */
    private $prdTabela;

    /**
     * @var string
     *
     * @ORM\Column(name="prd_insere1", type="string", nullable=true)
     */
    private $prdInsere1;

    /**
     * @var string
     *
     * @ORM\Column(name="prd_insere2", type="string", nullable=true)
     */
    private $prdInsere2;

    /**
     * @var string
     *
     * @ORM\Column(name="prd_delete", type="string", nullable=true)
     */
    private $prdDelete;

    /**
     * @var integer
     *
     * @ORM\Column(name="prd_minimo", type="integer", nullable=true)
     */
    private $prdMinimo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prd_maximo", type="integer", nullable=true)
     */
    private $prdMaximo;



    /**
     * Get prdId
     *
     * @return integer 
     */
    public function getPrdId()
    {
        return $this->prdId;
    }

    /**
     * Set prdPai1
     *
     * @param integer $prdPai1
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdPai1($prdPai1)
    {
        $this->prdPai1 = $prdPai1;

        return $this;
    }

    /**
     * Get prdPai1
     *
     * @return integer 
     */
    public function getPrdPai1()
    {
        return $this->prdPai1;
    }

    /**
     * Set prdPai2
     *
     * @param integer $prdPai2
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdPai2($prdPai2)
    {
        $this->prdPai2 = $prdPai2;

        return $this;
    }

    /**
     * Get prdPai2
     *
     * @return integer 
     */
    public function getPrdPai2()
    {
        return $this->prdPai2;
    }

    /**
     * Set prdTabela
     *
     * @param string $prdTabela
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdTabela($prdTabela)
    {
        $this->prdTabela = $prdTabela;

        return $this;
    }

    /**
     * Get prdTabela
     *
     * @return string 
     */
    public function getPrdTabela()
    {
        return $this->prdTabela;
    }

    /**
     * Set prdInsere1
     *
     * @param string $prdInsere1
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdInsere1($prdInsere1)
    {
        $this->prdInsere1 = $prdInsere1;

        return $this;
    }

    /**
     * Get prdInsere1
     *
     * @return string 
     */
    public function getPrdInsere1()
    {
        return $this->prdInsere1;
    }

    /**
     * Set prdInsere2
     *
     * @param string $prdInsere2
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdInsere2($prdInsere2)
    {
        $this->prdInsere2 = $prdInsere2;

        return $this;
    }

    /**
     * Get prdInsere2
     *
     * @return string 
     */
    public function getPrdInsere2()
    {
        return $this->prdInsere2;
    }

    /**
     * Set prdDelete
     *
     * @param string $prdDelete
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdDelete($prdDelete)
    {
        $this->prdDelete = $prdDelete;

        return $this;
    }

    /**
     * Get prdDelete
     *
     * @return string 
     */
    public function getPrdDelete()
    {
        return $this->prdDelete;
    }

    /**
     * Set prdMinimo
     *
     * @param integer $prdMinimo
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdMinimo($prdMinimo)
    {
        $this->prdMinimo = $prdMinimo;

        return $this;
    }

    /**
     * Get prdMinimo
     *
     * @return integer 
     */
    public function getPrdMinimo()
    {
        return $this->prdMinimo;
    }

    /**
     * Set prdMaximo
     *
     * @param integer $prdMaximo
     * @return CmsPerRelacionadoDuplo
     */
    public function setPrdMaximo($prdMaximo)
    {
        $this->prdMaximo = $prdMaximo;

        return $this;
    }

    /**
     * Get prdMaximo
     *
     * @return integer 
     */
    public function getPrdMaximo()
    {
        return $this->prdMaximo;
    }
}
