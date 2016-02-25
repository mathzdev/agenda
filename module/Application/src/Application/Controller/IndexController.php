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
 * Class IndexController
 * @package Application\Controller
 */
class IndexController extends AbstractController
{
    /**
     * Rota inicial do modulo
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $arrReturn = array();
        $arrReturn['countCantores'] = count($this->getService('Application\Service\AbstractService')->getRepository('Application\Entity\TbCantor')->findAll());
        $arrReturn['countDias'] = count($this->getService('Application\Service\AbstractService')->getRepository('Application\Entity\TbEvento')->findAll());
        $arrReturn['countFotos'] = count($this->getService('Application\Service\AbstractService')->getRepository('Application\Entity\TbGaleriaInstagram')->findAll());
        return new ViewModel($arrReturn);
    }
}
