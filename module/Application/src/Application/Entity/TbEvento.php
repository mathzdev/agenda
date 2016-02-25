<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEvento
 *
 * @ORM\Table(name="tb_evento")
 * @ORM\Entity(repositoryClass="Application\Entity\TbEventoRepository")
 */
class TbEvento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cantor", type="integer", nullable=false)
     */
    private $idCantor;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_evento_inicio", type="bigint", nullable=false)
     */
    private $dtEventoInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_evento_fim", type="bigint", nullable=false)
     */
    private $dtEventoFim;



    /**
     * Get idEvento
     *
     * @return integer 
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set idCantor
     *
     * @param integer $idCantor
     * @return TbEvento
     */
    public function setIdCantor($idCantor)
    {
        $this->idCantor = $idCantor;

        return $this;
    }

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
     * Set dtEventoInicio
     *
     * @param integer $dtEventoInicio
     * @return TbEvento
     */
    public function setDtEventoInicio($dtEventoInicio)
    {
        $this->dtEventoInicio = $dtEventoInicio;

        return $this;
    }

    /**
     * Get dtEventoInicio
     *
     * @return integer 
     */
    public function getDtEventoInicio()
    {
        return $this->dtEventoInicio;
    }

    /**
     * Set dtEventoFim
     *
     * @param integer $dtEventoFim
     * @return TbEvento
     */
    public function setDtEventoFim($dtEventoFim)
    {
        $this->dtEventoFim = $dtEventoFim;

        return $this;
    }

    /**
     * Get dtEventoFim
     *
     * @return integer 
     */
    public function getDtEventoFim()
    {
        return $this->dtEventoFim;
    }
}
