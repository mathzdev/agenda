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
 * Class CantoresController
 * @package Application\Controller
 */
class CantoresController extends AbstractController
{
    /**
     * Rota inicial do modulo
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $cantores = $this->getService()->getRepository('Application\Entity\TbCantor')->findAll();
        $view = new ViewModel(array('cantores' => $cantores));
        return $view;
    }

    /**
     * Rota para cadastrar um cantor
     *
     * @return ViewModel
     */
    public function cadastroAction()
    {
        $view = new ViewModel(array());

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $arrFile = $this->getFiles();

            $insereCantor = $this->getService()->insereCantor($arrPost, $arrFile);

            if ($insereCantor == true) {
                $view->setVariable('mensagem', 'Cantor cadastrado com sucesso.');
            }
        }

        return $view;
    }

    /**
     * Rota para editar um cantor
     *
     * @return ViewModel
     */
    public function editaAction()
    {
        $arrParam = $this->getParams();
        $cantor = $this->getService()->getRepository('Application\Entity\TbCantor')->find($arrParam['id']);

        $view = new ViewModel(array('cantor' => $cantor));

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $arrFile = $this->getFiles();

            $editaCantor = $this->getService()->editaCantor($arrPost, $arrFile, $arrParam['id']);

            if ($editaCantor == true) {
                $view->setVariable('mensagem', 'Cantor atualizado com sucesso.');
            }
        }

        return $view;
    }

    /**
     * Rota para deletar um cantor
     *
     * @return ViewModel
     */
    public function deletaAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);
        $arrParam = $this->getParams();
        $deletaCantor = $this->getService()->deletaCantor($arrParam['id']);

        if ($deletaCantor == true) {
            $this->redirect()->toRoute('cantores');
        }

        return $response;
    }

    /**
     * Rota para visualizar um cantor
     *
     * @return ViewModel
     */
    public function visualizaAction()
    {
        $arrParam = $this->getParams();
        $cantor = $this->getService()->getRepository('Application\Entity\TbCantor')->find($arrParam['id']);
        $view = new ViewModel(array('cantor' => $cantor));

        return $view;
    }

    /**
     * Rota para visualizar um cantor
     *
     * @return ViewModel
     */
    public function diaAction()
    {
        $arrParam = $this->getParams();
        $mensagem = null;

        if ($this->isPost()) {
            $salvarAgenda = $this->getService()->salvarAgenda($this->getPost(), $arrParam['id']);

            if ($salvarAgenda == true) {
                $mensagem = 'Agenda atualizada com sucesso.';
            }
        }

        $cantor = $this->getService()->getRepository('Application\Entity\TbCantor')->find($arrParam['id']);
        $dias = $this->getService()->getRepository('Application\Entity\TbEvento')->findBy(array('idCantor' => $arrParam['id']));

        $view = new ViewModel(array('cantor' => $cantor, 'dias' => $dias, 'mensagem' => $mensagem));

        return $view;
    }

    /**
     * Rota para a partial view repeat
     *
     * @return ViewModel
     */
    public function repeatAction()
    {
        $params = $this->getParams();
        $result = new ViewModel(array('id' => $params['id']));
        $result->setTerminal(true);
        return $result;
    }
}