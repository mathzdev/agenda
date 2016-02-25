<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;

/**
 * Class FotosController
 * @package Application\Controller
 */
class FotosController extends AbstractController
{
    /**
     * Rota inicial do modulo
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $arrReturn = array('fotos' => $this->getService()->getRepository('Application\Entity\TbGaleriaInstagram')->findBy(array('exibe' => 'sim')));
        return new ViewModel($arrReturn);
    }

    /**
     * Rota para ativar uma foto
     */
    public function ativarAction()
    {
        $arrParam = $this->getParams();
        $this->getService()->editaStatusFoto(array('exibe' => 'sim'), $arrParam['id']);
        $this->redirect()->toUrl('/fotos');
    }

    /**
     * Rota para ativar uma foto
     */
    public function desativarAction()
    {
        $arrParam = $this->getParams();
        $this->getService()->editaStatusFoto(array('exibe' => 'nao'), $arrParam['id']);
        $this->redirect()->toUrl('/fotos');
    }
}
