<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 23/10/15
 * Time: 21:59
 */

namespace Application\Controller;

use Zend\Mail\Message;
use Zend\View\Model\ViewModel;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Zend\Mime\Message as MimeMessage;
use Zend\Mime\Part as MimePart;

/**
 * Class AutenticacaoController
 * @package Application\Controller
 */
class AutenticacaoController extends AbstractController
{
    /**
     * Rota inicial da controller autenticacao
     *
     * @return array|\Zend\Stdlib\ResponseInterface
     */
    public function indexAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);

        $sessionUser = $this->getUserSession();

        if ($sessionUser->logado == true) {
            $this->redirect()->toRoute('home');
        } else {
            $this->redirect()->toUrl('/autenticacao/login');
        }

        return $response;
    }

    /**
     * Rota para o cms-usuario realizar login
     *
     * @return ViewModel
     */
    public function loginAction()
    {
        $result = new ViewModel(array('titulo' => 'Paraíba Carne de Sol # Login'));
        $result->setTerminal(true);

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $existeUsuario = $this->getService('Application\Service\CmsUsuario')->existeUsuario(array('usr_email' => $arrPost['email'], 'usr_senha' => $arrPost['senha']));

            if ($existeUsuario) {
                $this->getUserSession()->logado = true;
                $usuario = $this->getService('Application\Service\CmsUsuario')->findBy(array('usr_email' => $arrPost['email'], 'usr_senha' => $arrPost['senha']));
                $this->getUserSession()->usuario = reset($usuario);
            } else {
                $result->setVariable('mensagem', 'Usuário ou senha não localizados em nosso sistema.');
                $this->getUserSession()->logado = false;
            }
        }

        if ($this->getUserSession()->logado == true) {
            $this->redirect()->toRoute('home');
        }

        return $result;
    }

    /**
     * Rota para o cms-usuario realizar logout
     */
    public function logoutAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);

        $this->getUserSession()->logado = false;
        $this->getUserSession()->usuario = array();
        $this->redirect()->toRoute('autenticacao');
    }

    /**
     * Rota para o cms-usuario recuperar sua senha
     *
     * @return ViewModel
     */
    public function esqueceuSenhaAction()
    {
        $result = new ViewModel(array('titulo' => 'Paraíba Carne de Sol # Esqueceu Sua Senha'));
        $result->setTerminal(true);

        if ($this->isPost()) {
            $arrPost = $this->getPost();

            $findByEmail = $this->getService('Application\Service\CmsUsuario')->findBy(array('usr_email' => $arrPost['email']));
            if (count($findByEmail) > 0) {
                try {
                    $message = new Message();
                    $message->addFrom('agenda@paraibacarnedesol.com.br', 'Contato # Agenda')->addTo(reset($findByEmail)->getUsrEmail())->setSubject('Recuperação de Senha # Agenda - ' . date('d/m/Y H:i:s', time()));

                    $corpoEmail = $this->getService('Application\Service\CmsUsuario')->getCorpoEmailEsqueciSenha(reset($findByEmail));

                    $html = new MimePart($corpoEmail);
                    $html->type = "text/html";

                    $body = new MimeMessage();
                    $body->addPart($html);

                    $message->setBody($body);

                    $transport = new SmtpTransport();
                    $options = new SmtpOptions($this->getStmpOptions());

                    $transport->setOptions($options);
                    $transport->send($message);

                    $result->setVariable('mensagem', 'Localizamos seu E-mail, cheque sua caixa de entrada pois enviamos seus dados.');
                } catch (\Exception $e) {

                }
            } else {
                $result->setVariable('mensagem', 'Usuário ou senha não localizados em nosso sistema.');
            }
        }

        if ($this->getUserSession()->logado == true) {
            $this->redirect()->toRoute('home');
        }

        return $result;
    }
}
