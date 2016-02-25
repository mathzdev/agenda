<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsPerRelacionado
 *
 * @ORM\Table(name="cms_per_relacionado")
 * @ORM\Entity
 */
class CmsPerRelacionado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pr_id_pai", type="integer", nullable=false)
     */
    private $prIdPai;

    /**
     * @var integer
     *
     * @ORM\Column(name="pr_id_filho", type="integer", nullable=false)
     */
    private $prIdFilho;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_lista", type="string", nullable=true)
     */
    private $prLista;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_edita", type="string", nullable=true)
     */
    private $prEdita;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_deleta", type="string", nullable=false)
     */
    private $prDeleta;



    /**
     * Get prId
     *
     * @return integer 
     */
    public function getPrId()
    {
        return $this->prId;
    }

    /**
     * Set prIdPai
     *
     * @param integer $prIdPai
     * @return CmsPerRelacionado
     */
    public function setPrIdPai($prIdPai)
    {
        $this->prIdPai = $prIdPai;

        return $this;
    }

    /**
     * Get prIdPai
     *
     * @return integer 
     */
    public function getPrIdPai()
    {
        return $this->prIdPai;
    }

    /**
     * Set prIdFilho
     *
     * @param integer $prIdFilho
     * @return CmsPerRelacionado
     */
    public function setPrIdFilho($prIdFilho)
    {
        $this->prIdFilho = $prIdFilho;

        return $this;
    }

    /**
     * Get prIdFilho
     *
     * @return integer 
     */
    public function getPrIdFilho()
    {
        return $this->prIdFilho;
    }

    /**
     * Set prLista
     *
     * @param string $prLista
     * @return CmsPerRelacionado
     */
    public function setPrLista($prLista)
    {
        $this->prLista = $prLista;

        return $this;
    }

    /**
     * Get prLista
     *
     * @return string 
     */
    public function getPrLista()
    {
        return $this->prLista;
    }

    /**
     * Set prEdita
     *
     * @param string $prEdita
     * @return CmsPerRelacionado
     */
    public function setPrEdita($prEdita)
    {
        $this->prEdita = $prEdita;

        return $this;
    }

    /**
     * Get prEdita
     *
     * @return string 
     */
    public function getPrEdita()
    {
        return $this->prEdita;
    }

    /**
     * Set prDeleta
     *
     * @param string $prDeleta
     * @return CmsPerRelacionado
     */
    public function setPrDeleta($prDeleta)
    {
        $this->prDeleta = $prDeleta;

        return $this;
    }

    /**
     * Get prDeleta
     *
     * @return string 
     */
    public function getPrDeleta()
    {
        return $this->prDeleta;
    }
}
