<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class CmsUsuario
 * @package Application\Service
 */
class CmsUsuario extends AbstractService
{
    /**
     * Valida se esse usuario e senha existem no banco
     *
     * @param $arrParam
     *
     * @return boolean
     */
    public function existeUsuario($arrParam)
    {
        $arrFind = array();

        foreach ($arrParam as $key => $param) {
            $arrFind[$this->camelize($key)] = $param;
        }
        $arrFind['usrStatus'] = 'Ativo';
        $find = $this->getRepository()->findBy($arrFind);

        if ($find == null) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Retorna dados do usuario para ser salvo na sessao
     *
     * @param $arrParam
     *
     * @return array
     */
    public function usuarioLogado($arrParam)
    {
        $arrFind = array();

        foreach ($arrParam as $key => $param) {
            $arrFind[$this->camelize($key)] = $param;
        }

        $find = $this->getRepository()->findBy($arrFind);

        return array('idUsuario' => reset($find)->getIdUsuario(), 'nomeUsuario' => reset($find)->getNomeUsuario(), 'emailUsuario' => reset($find)->getEmailUsuario());
    }

    /**
     * Insere um usuario no sistema
     *
     * @param $arrParam
     *
     * @return bool
     */
    public function insereUsuario($arrParam)
    {
        $arrInsert = array();

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity();

        try {
            $entidade->setUsrNome($arrInsert['nomeUsuario']);
            $entidade->setUsrLogin(strtolower($arrInsert['nomeUsuario']));
            $entidade->setUsrEmail($arrInsert['emailUsuario']);
            $entidade->setUsrSenha($arrInsert['senhaUsuario']);
            $entidade->setUsrStatus('Ativo');
            $entidade->setUsrPin(0);
            $entidade->setUsrIprever(0);
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Atualiza um usuario do sistema
     *
     * @param $arrParam
     * @param $idUsuario
     *
     * @return bool
     */
    public function editaUsuario($arrParam, $idUsuario)
    {
        $arrUpdate = array();

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->find($idUsuario);

        try {
            $entidade->setUsrNome($arrUpdate['nomeUsuario']);
            $entidade->setUsrEmail($arrUpdate['emailUsuario']);
            $entidade->setUsrSenha($arrUpdate['senhaUsuario']);
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Deleta um usuario do sistema
     *
     * @param $idUsuario
     *
     * @return bool
     */
    public function deletaUsuario($idUsuario)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity()), $idUsuario);

        try {
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Retorna o corpo html do email para a rota esqueci minha senha
     *
     * @param $user
     * @return string
     */
    public function getCorpoEmailEsqueciSenha($user)
    {
        $corpoEmail = '';
        $corpoEmail .= '<p><span style="font-size:16px">Ol&aacute; <strong>' . $user->getUsrNome() . '</strong>, voc&ecirc; esqueceu sua senha n&eacute;? kkk...</span></p>';
        $corpoEmail .= '<p><span style="font-size:16px">Tudo bem ok, demos um jeito e recuperamos ela rapidinho :D</span></p>';
        $corpoEmail .= '<p><span style="font-size:16px">Aqui est&atilde;o seus dados:</span></p>';
        $corpoEmail .= '<p><span style="font-size:16px"><strong>E-mail:</strong> ' . $user->getUsrEmail() . '</span></p>';
        $corpoEmail .= '<p><span style="font-size:16px"><strong>Senha:</strong> ' . $user->getUsrSenha() . '</span></p>';
        $corpoEmail .= '<p>Continue utilizando nosso sistema ok? ;)</p>';
        $corpoEmail .= '<p><a href="http://' . $_SERVER['HTTP_HOST'] . '/" target="_blank">http://' . $_SERVER['HTTP_HOST'] . '/</a></p>';
        $corpoEmail .= '<hr />';
        $corpoEmail .= '<p><em>Aten&ccedil;&atilde;o, este &eacute; um e-mail autom&aacute;tico, favor n&atilde;o responder. Obrigado, Agenda.</em></p>';

        return $corpoEmail;
    }
}