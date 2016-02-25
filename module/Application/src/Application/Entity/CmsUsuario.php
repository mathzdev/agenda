<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsUsuario
 *
 * @ORM\Table(name="cms_usuario")
 * @ORM\Entity
 */
class CmsUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usrId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_log_entrada", type="bigint", nullable=true)
     */
    private $usrLogEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_nome", type="string", length=50, nullable=false)
     */
    private $usrNome;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_login", type="string", length=50, nullable=false)
     */
    private $usrLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_senha", type="string", length=32, nullable=false)
     */
    private $usrSenha;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_pin", type="string", length=32, nullable=false)
     */
    private $usrPin;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_habbo", type="string", length=50, nullable=true)
     */
    private $usrHabbo;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_email", type="string", length=255, nullable=false)
     */
    private $usrEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_status", type="string", nullable=false)
     */
    private $usrStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_iprever", type="integer", nullable=false)
     */
    private $usrIprever;



    /**
     * Get usrId
     *
     * @return integer 
     */
    public function getUsrId()
    {
        return $this->usrId;
    }

    /**
     * Set usrLogEntrada
     *
     * @param integer $usrLogEntrada
     * @return CmsUsuario
     */
    public function setUsrLogEntrada($usrLogEntrada)
    {
        $this->usrLogEntrada = $usrLogEntrada;

        return $this;
    }

    /**
     * Get usrLogEntrada
     *
     * @return integer 
     */
    public function getUsrLogEntrada()
    {
        return $this->usrLogEntrada;
    }

    /**
     * Set usrNome
     *
     * @param string $usrNome
     * @return CmsUsuario
     */
    public function setUsrNome($usrNome)
    {
        $this->usrNome = $usrNome;

        return $this;
    }

    /**
     * Get usrNome
     *
     * @return string 
     */
    public function getUsrNome()
    {
        return $this->usrNome;
    }

    /**
     * Set usrLogin
     *
     * @param string $usrLogin
     * @return CmsUsuario
     */
    public function setUsrLogin($usrLogin)
    {
        $this->usrLogin = $usrLogin;

        return $this;
    }

    /**
     * Get usrLogin
     *
     * @return string 
     */
    public function getUsrLogin()
    {
        return $this->usrLogin;
    }

    /**
     * Set usrSenha
     *
     * @param string $usrSenha
     * @return CmsUsuario
     */
    public function setUsrSenha($usrSenha)
    {
        $this->usrSenha = $usrSenha;

        return $this;
    }

    /**
     * Get usrSenha
     *
     * @return string 
     */
    public function getUsrSenha()
    {
        return $this->usrSenha;
    }

    /**
     * Set usrPin
     *
     * @param string $usrPin
     * @return CmsUsuario
     */
    public function setUsrPin($usrPin)
    {
        $this->usrPin = $usrPin;

        return $this;
    }

    /**
     * Get usrPin
     *
     * @return string 
     */
    public function getUsrPin()
    {
        return $this->usrPin;
    }

    /**
     * Set usrHabbo
     *
     * @param string $usrHabbo
     * @return CmsUsuario
     */
    public function setUsrHabbo($usrHabbo)
    {
        $this->usrHabbo = $usrHabbo;

        return $this;
    }

    /**
     * Get usrHabbo
     *
     * @return string 
     */
    public function getUsrHabbo()
    {
        return $this->usrHabbo;
    }

    /**
     * Set usrEmail
     *
     * @param string $usrEmail
     * @return CmsUsuario
     */
    public function setUsrEmail($usrEmail)
    {
        $this->usrEmail = $usrEmail;

        return $this;
    }

    /**
     * Get usrEmail
     *
     * @return string 
     */
    public function getUsrEmail()
    {
        return $this->usrEmail;
    }

    /**
     * Set usrStatus
     *
     * @param string $usrStatus
     * @return CmsUsuario
     */
    public function setUsrStatus($usrStatus)
    {
        $this->usrStatus = $usrStatus;

        return $this;
    }

    /**
     * Get usrStatus
     *
     * @return string 
     */
    public function getUsrStatus()
    {
        return $this->usrStatus;
    }

    /**
     * Set usrIprever
     *
     * @param integer $usrIprever
     * @return CmsUsuario
     */
    public function setUsrIprever($usrIprever)
    {
        $this->usrIprever = $usrIprever;

        return $this;
    }

    /**
     * Get usrIprever
     *
     * @return integer 
     */
    public function getUsrIprever()
    {
        return $this->usrIprever;
    }
}
