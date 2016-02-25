<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Service\Cantores;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class AjaxController
 * @package Application\Controller
 */
class AjaxController extends AbstractActionController
{
    /**
     * Rota inicial do sistema
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);
    }

    /**
     * Rota para exibir a agenda
     */
    public function agendaAction()
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $Cantores = new Cantores($objectManager);
        $agenda = $Cantores->getAgenda(5);
        $result = new ViewModel(array('agenda' => $agenda));
        $result->setTerminal(true);
        return $result;
    }

    /**
     * Acao para gerar uma miniatura de uma imagem
     */
    public function thumbAction()
    {
        #recebendo a url da imagem
        $filename = $_GET['img'];

        #Cabeçalho que ira definir a saida da pagina
        $mime = getimagesize($filename);

        header('Content-type: ' . $mime['mime']);

        #pegando as dimensoes reais da imagem, largura e altura
        list($width, $height) = getimagesize($filename);

        #setando a largura da miniatura
        $new_width = 150;
        #setando a altura da miniatura
        $new_height = 150;

        #gerando a a miniatura da imagem
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        #o 3º argumento é a qualidade da miniatura de 0 a 100
        imagejpeg($image_p, null, 100);
        imagedestroy($image_p);
        exit;
    }
}