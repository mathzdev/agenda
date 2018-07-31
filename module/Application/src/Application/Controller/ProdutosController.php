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
 * Class ProdutosController
 * @package Application\Controller
 */
class ProdutosController extends AbstractController
{
    private $produtoService = 'Application\Service\Produto';

    /**
     * Rota inicial do modulo
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $arrReturn = array('produtos' => $this->getService($this->produtoService)->getRepository('Application\Entity\TbProduto')->findAll());
        return new ViewModel($arrReturn);
    }

    /**
     * Rota do importador
     */
    public function importadorAction()
    {
        return $this->getService($this->produtoService)->importarProdutos();
    }
}
