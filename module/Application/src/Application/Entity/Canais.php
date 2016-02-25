<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Canais
 *
 * @ORM\Table(name="canais")
 * @ORM\Entity
 */
class Canais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ca_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $caId;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_nome", type="string", length=50, nullable=false)
     */
    private $caNome;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_caminho", type="string", length=85, nullable=true)
     */
    private $caCaminho;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_diretorio", type="string", length=50, nullable=true)
     */
    private $caDiretorio;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_link", type="string", length=80, nullable=true)
     */
    private $caLink;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_target", type="string", nullable=true)
     */
    private $caTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_status", type="string", nullable=false)
     */
    private $caStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="ca_pai", type="integer", nullable=true)
     */
    private $caPai;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_restrito", type="string", nullable=false)
     */
    private $caRestrito;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_logado", type="string", nullable=false)
     */
    private $caLogado;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_background", type="string", length=7, nullable=true)
     */
    private $caBackground;

    /**
     * @var integer
     *
     * @ORM\Column(name="ca_views", type="integer", nullable=false)
     */
    private $caViews;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_imagem", type="string", length=50, nullable=true)
     */
    private $caImagem;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_cache", type="string", nullable=true)
     */
    private $caCache;

    /**
     * @var integer
     *
     * @ORM\Column(name="ca_cachetempo", type="integer", nullable=true)
     */
    private $caCachetempo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ca_ordem", type="integer", nullable=false)
     */
    private $caOrdem;



    /**
     * Get caId
     *
     * @return integer 
     */
    public function getCaId()
    {
        return $this->caId;
    }

    /**
     * Set caNome
     *
     * @param string $caNome
     * @return Canais
     */
    public function setCaNome($caNome)
    {
        $this->caNome = $caNome;

        return $this;
    }

    /**
     * Get caNome
     *
     * @return string 
     */
    public function getCaNome()
    {
        return $this->caNome;
    }

    /**
     * Set caCaminho
     *
     * @param string $caCaminho
     * @return Canais
     */
    public function setCaCaminho($caCaminho)
    {
        $this->caCaminho = $caCaminho;

        return $this;
    }

    /**
     * Get caCaminho
     *
     * @return string 
     */
    public function getCaCaminho()
    {
        return $this->caCaminho;
    }

    /**
     * Set caDiretorio
     *
     * @param string $caDiretorio
     * @return Canais
     */
    public function setCaDiretorio($caDiretorio)
    {
        $this->caDiretorio = $caDiretorio;

        return $this;
    }

    /**
     * Get caDiretorio
     *
     * @return string 
     */
    public function getCaDiretorio()
    {
        return $this->caDiretorio;
    }

    /**
     * Set caLink
     *
     * @param string $caLink
     * @return Canais
     */
    public function setCaLink($caLink)
    {
        $this->caLink = $caLink;

        return $this;
    }

    /**
     * Get caLink
     *
     * @return string 
     */
    public function getCaLink()
    {
        return $this->caLink;
    }

    /**
     * Set caTarget
     *
     * @param string $caTarget
     * @return Canais
     */
    public function setCaTarget($caTarget)
    {
        $this->caTarget = $caTarget;

        return $this;
    }

    /**
     * Get caTarget
     *
     * @return string 
     */
    public function getCaTarget()
    {
        return $this->caTarget;
    }

    /**
     * Set caStatus
     *
     * @param string $caStatus
     * @return Canais
     */
    public function setCaStatus($caStatus)
    {
        $this->caStatus = $caStatus;

        return $this;
    }

    /**
     * Get caStatus
     *
     * @return string 
     */
    public function getCaStatus()
    {
        return $this->caStatus;
    }

    /**
     * Set caPai
     *
     * @param integer $caPai
     * @return Canais
     */
    public function setCaPai($caPai)
    {
        $this->caPai = $caPai;

        return $this;
    }

    /**
     * Get caPai
     *
     * @return integer 
     */
    public function getCaPai()
    {
        return $this->caPai;
    }

    /**
     * Set caRestrito
     *
     * @param string $caRestrito
     * @return Canais
     */
    public function setCaRestrito($caRestrito)
    {
        $this->caRestrito = $caRestrito;

        return $this;
    }

    /**
     * Get caRestrito
     *
     * @return string 
     */
    public function getCaRestrito()
    {
        return $this->caRestrito;
    }

    /**
     * Set caLogado
     *
     * @param string $caLogado
     * @return Canais
     */
    public function setCaLogado($caLogado)
    {
        $this->caLogado = $caLogado;

        return $this;
    }

    /**
     * Get caLogado
     *
     * @return string 
     */
    public function getCaLogado()
    {
        return $this->caLogado;
    }

    /**
     * Set caBackground
     *
     * @param string $caBackground
     * @return Canais
     */
    public function setCaBackground($caBackground)
    {
        $this->caBackground = $caBackground;

        return $this;
    }

    /**
     * Get caBackground
     *
     * @return string 
     */
    public function getCaBackground()
    {
        return $this->caBackground;
    }

    /**
     * Set caViews
     *
     * @param integer $caViews
     * @return Canais
     */
    public function setCaViews($caViews)
    {
        $this->caViews = $caViews;

        return $this;
    }

    /**
     * Get caViews
     *
     * @return integer 
     */
    public function getCaViews()
    {
        return $this->caViews;
    }

    /**
     * Set caImagem
     *
     * @param string $caImagem
     * @return Canais
     */
    public function setCaImagem($caImagem)
    {
        $this->caImagem = $caImagem;

        return $this;
    }

    /**
     * Get caImagem
     *
     * @return string 
     */
    public function getCaImagem()
    {
        return $this->caImagem;
    }

    /**
     * Set caCache
     *
     * @param string $caCache
     * @return Canais
     */
    public function setCaCache($caCache)
    {
        $this->caCache = $caCache;

        return $this;
    }

    /**
     * Get caCache
     *
     * @return string 
     */
    public function getCaCache()
    {
        return $this->caCache;
    }

    /**
     * Set caCachetempo
     *
     * @param integer $caCachetempo
     * @return Canais
     */
    public function setCaCachetempo($caCachetempo)
    {
        $this->caCachetempo = $caCachetempo;

        return $this;
    }

    /**
     * Get caCachetempo
     *
     * @return integer 
     */
    public function getCaCachetempo()
    {
        return $this->caCachetempo;
    }

    /**
     * Set caOrdem
     *
     * @param integer $caOrdem
     * @return Canais
     */
    public function setCaOrdem($caOrdem)
    {
        $this->caOrdem = $caOrdem;

        return $this;
    }

    /**
     * Get caOrdem
     *
     * @return integer 
     */
    public function getCaOrdem()
    {
        return $this->caOrdem;
    }
}
