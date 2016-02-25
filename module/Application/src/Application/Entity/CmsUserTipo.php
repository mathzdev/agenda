<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsUserTipo
 *
 * @ORM\Table(name="cms_user_tipo")
 * @ORM\Entity
 */
class CmsUserTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tp_usr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tpUsrId;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_usr_nome", type="string", length=50, nullable=false)
     */
    private $tpUsrNome;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_usr_comentario", type="text", nullable=true)
     */
    private $tpUsrComentario;



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
     * Set tpUsrNome
     *
     * @param string $tpUsrNome
     * @return CmsUserTipo
     */
    public function setTpUsrNome($tpUsrNome)
    {
        $this->tpUsrNome = $tpUsrNome;

        return $this;
    }

    /**
     * Get tpUsrNome
     *
     * @return string 
     */
    public function getTpUsrNome()
    {
        return $this->tpUsrNome;
    }

    /**
     * Set tpUsrComentario
     *
     * @param string $tpUsrComentario
     * @return CmsUserTipo
     */
    public function setTpUsrComentario($tpUsrComentario)
    {
        $this->tpUsrComentario = $tpUsrComentario;

        return $this;
    }

    /**
     * Get tpUsrComentario
     *
     * @return string 
     */
    public function getTpUsrComentario()
    {
        return $this->tpUsrComentario;
    }
}
