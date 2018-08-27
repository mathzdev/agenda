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
        $arrReturn = array(
            'produtos' => $this->getService($this->produtoService)->getRepository('Application\Entity\TbProduto')->findBy(
                array('idCategoriaProduto' => $this->getService($this->produtoService)->categoriaSessaoAtual())
            ),
            'categorias' => $this->getService($this->produtoService)->getRepository('Application\Entity\TbCategoriaProduto')->findAll(),
            'categoriaAtual' => $this->getService($this->produtoService)->categoriaSessaoAtual()
        );
        return new ViewModel($arrReturn);
    }

    /**
     * Rota do importador
     */
    public function importadorAction()
    {
        return $this->getService($this->produtoService)->importarProdutos();
    }

    /**
     * Rota para mudar categoria
     */
    public function mudarCategoriaAction()
    {
        $arrParam = $this->getParams();
        return $this->getService($this->produtoService)->mudarCategoria($arrParam['id'], $this->redirect());
    }

    /**
     * Rota para visualizar um produto
     *
     * @return ViewModel
     */
    public function visualizaAction()
    {
        $arrParam = $this->getParams();
        $produto = $this->getService($this->produtoService)->getRepository('Application\Entity\TbProduto')->find($arrParam['id']);
        $view = new ViewModel(array('produto' => $produto));

        return $view;
    }

    /**
     * Rota para cadastrar um produto
     *
     * @return ViewModel
     */
    public function cadastroAction()
    {
        $view = new ViewModel(array('categorias' => $this->getService($this->produtoService)->getRepository('Application\Entity\TbCategoriaProduto')->findAll()));

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $arrFile = $this->getFiles();

            $insereProduto = $this->getService($this->produtoService)->insereProduto($arrPost, $arrFile);

            if ($insereProduto == true) {
                $view->setVariable('mensagem', 'Produto cadastrado com sucesso.');
            }
        }

        return $view;
    }

    /**
     * Rota para editar um produto
     *
     * @return ViewModel
     */
    public function editaAction()
    {
        $arrParam = $this->getParams();
        $produto = $this->getService($this->produtoService)->getRepository('Application\Entity\TbProduto')->find($arrParam['id']);

        $view = new ViewModel(array('produto' => $produto, 'categorias' => $this->getService($this->produtoService)->getRepository('Application\Entity\TbCategoriaProduto')->findAll()));

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $arrFile = $this->getFiles();

            $editaProduto = $this->getService($this->produtoService)->editaProduto($arrPost, $arrFile, $arrParam['id']);

            if ($editaProduto == true) {
                $view->setVariable('mensagem', 'Produto atualizado com sucesso.');
            }
        }

        return $view;
    }

    /**
     * Rota para deletar um produto
     *
     * @return ViewModel
     */
    public function deletaAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);
        $arrParam = $this->getParams();
        $deletaProduto = $this->getService($this->produtoService)->deletaProduto($arrParam['id']);

        if ($deletaProduto == true) {
            $this->redirect()->toRoute('produtos');
        }

        return $response;
    }
}
