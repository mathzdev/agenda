<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsLog
 *
 * @ORM\Table(name="cms_log")
 * @ORM\Entity
 */
class CmsLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab_id", type="integer", nullable=true)
     */
    private $tabId;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_id", type="string", length=255, nullable=false)
     */
    private $usrId;

    /**
     * @var string
     *
     * @ORM\Column(name="log_registro", type="string", length=255, nullable=true)
     */
    private $logRegistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_time", type="bigint", nullable=false)
     */
    private $logTime;

    /**
     * @var string
     *
     * @ORM\Column(name="log_url", type="string", length=255, nullable=false)
     */
    private $logUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="log_action", type="string", length=100, nullable=false)
     */
    private $logAction;

    /**
     * @var string
     *
     * @ORM\Column(name="log_post", type="text", nullable=false)
     */
    private $logPost;

    /**
     * @var string
     *
     * @ORM\Column(name="log_get", type="text", nullable=false)
     */
    private $logGet;

    /**
     * @var string
     *
     * @ORM\Column(name="log_ip", type="string", length=15, nullable=false)
     */
    private $logIp;



    /**
     * Get logId
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * Set tabId
     *
     * @param integer $tabId
     * @return CmsLog
     */
    public function setTabId($tabId)
    {
        $this->tabId = $tabId;

        return $this;
    }

    /**
     * Get tabId
     *
     * @return integer 
     */
    public function getTabId()
    {
        return $this->tabId;
    }

    /**
     * Set usrId
     *
     * @param string $usrId
     * @return CmsLog
     */
    public function setUsrId($usrId)
    {
        $this->usrId = $usrId;

        return $this;
    }

    /**
     * Get usrId
     *
     * @return string 
     */
    public function getUsrId()
    {
        return $this->usrId;
    }

    /**
     * Set logRegistro
     *
     * @param string $logRegistro
     * @return CmsLog
     */
    public function setLogRegistro($logRegistro)
    {
        $this->logRegistro = $logRegistro;

        return $this;
    }

    /**
     * Get logRegistro
     *
     * @return string 
     */
    public function getLogRegistro()
    {
        return $this->logRegistro;
    }

    /**
     * Set logTime
     *
     * @param integer $logTime
     * @return CmsLog
     */
    public function setLogTime($logTime)
    {
        $this->logTime = $logTime;

        return $this;
    }

    /**
     * Get logTime
     *
     * @return integer 
     */
    public function getLogTime()
    {
        return $this->logTime;
    }

    /**
     * Set logUrl
     *
     * @param string $logUrl
     * @return CmsLog
     */
    public function setLogUrl($logUrl)
    {
        $this->logUrl = $logUrl;

        return $this;
    }

    /**
     * Get logUrl
     *
     * @return string 
     */
    public function getLogUrl()
    {
        return $this->logUrl;
    }

    /**
     * Set logAction
     *
     * @param string $logAction
     * @return CmsLog
     */
    public function setLogAction($logAction)
    {
        $this->logAction = $logAction;

        return $this;
    }

    /**
     * Get logAction
     *
     * @return string 
     */
    public function getLogAction()
    {
        return $this->logAction;
    }

    /**
     * Set logPost
     *
     * @param string $logPost
     * @return CmsLog
     */
    public function setLogPost($logPost)
    {
        $this->logPost = $logPost;

        return $this;
    }

    /**
     * Get logPost
     *
     * @return string 
     */
    public function getLogPost()
    {
        return $this->logPost;
    }

    /**
     * Set logGet
     *
     * @param string $logGet
     * @return CmsLog
     */
    public function setLogGet($logGet)
    {
        $this->logGet = $logGet;

        return $this;
    }

    /**
     * Get logGet
     *
     * @return string 
     */
    public function getLogGet()
    {
        return $this->logGet;
    }

    /**
     * Set logIp
     *
     * @param string $logIp
     * @return CmsLog
     */
    public function setLogIp($logIp)
    {
        $this->logIp = $logIp;

        return $this;
    }

    /**
     * Get logIp
     *
     * @return string 
     */
    public function getLogIp()
    {
        return $this->logIp;
    }
}
