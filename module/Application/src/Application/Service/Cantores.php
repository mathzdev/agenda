<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class Cantores
 * @package Application\Service
 */
class Cantores extends AbstractService
{
    /**
     * Insere um cantor no sistema
     *
     * @param $arrParam
     * @param $files
     *
     * @return bool
     */
    public function insereCantor($arrParam, $files)
    {
        $arrInsert = array();
        if (count($files['foto_cantor']) > 1 && strlen($files['foto_cantor']['type']) > 1 && $this->isImage($files['foto_cantor']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' . explode('/', $files['foto_cantor']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['foto_cantor']['tmp_name'], $arquivo)) {
                $arrParam['foto_cantor'] = '/data/' . $nomeFile;
            } else {
                $arrParam['foto_cantor'] = null;
            }
        } else {
            $arrParam['foto_cantor'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity('Application\Entity\TbCantor');

        try {
            $entidade->setNomeCantor(utf8_encode($arrInsert['nomeCantor']));
            $entidade->setDescricaoCantor(utf8_encode($arrInsert['descricaoCantor']));

            if ($arrInsert['fotoCantor'] != null) {
                $entidade->setFotoCantor($arrInsert['fotoCantor']);
            }

            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Atualiza um cantor do sistema
     *
     * @param $arrParam
     * @param $files
     * @param $idCantor
     *
     * @return bool
     */
    public function editaCantor($arrParam, $files, $idCantor)
    {
        $arrUpdate = array();

        if (count($files['foto_cantor']) > 1 && strlen($files['foto_cantor']['type']) > 1 && $this->isImage($files['foto_cantor']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' . explode('/', $files['foto_cantor']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['foto_cantor']['tmp_name'], $arquivo)) {
                $arrParam['foto_cantor'] = '/data/' . $nomeFile;
            } else {
                $arrParam['foto_cantor'] = null;
            }
        } else {
            $arrParam['foto_cantor'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->getRepository('Application\Entity\TbCantor')->find($idCantor);

        if ($arrParam['foto_cantor'] != null) {
            unlink('public' . $entidade->getFotoCantor());
        }

        try {
            $entidade->setNomeCantor(utf8_encode($arrUpdate['nomeCantor']));
            $entidade->setDescricaoCantor(utf8_encode($arrUpdate['descricaoCantor']));

            if ($arrUpdate['fotoCantor'] != null) {
                $entidade->setFotoCantor($arrUpdate['fotoCantor']);
            }

            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Deleta um cantor do sistema
     *
     * @param $idCantor
     *
     * @return bool
     */
    public function deletaCantor($idCantor)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity('Application\Entity\TbCantor')), $idCantor);
        $cantor = $this->getRepository('Application\Entity\TbCantor')->find($idCantor);

        try {
            unlink('public' . $cantor->getFotoCantor());
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Salvar a agenda de um cantor
     *
     * @param $arrParam
     * @param $idCantor
     * @return bool
     */
    public function salvarAgenda($arrParam, $idCantor)
    {
        $evento = $this->getRepository('Application\Entity\TbEvento')->limparAgendaCantor($idCantor);
        $arrDtIni = $arrParam->dataini;
        $arrDtFim = $arrParam->datafim;
        $entidade = $this->getEntity('Application\Entity\TbEvento');

        foreach ($arrDtIni as $key => $dtIni) {
            $dtFim = $arrDtFim[$key];

            if (!$this->validarData($dtIni)) {
                unset($dtIni);
                continue;
            }

            if (!$this->validarData($dtFim)) {
                unset($dtFim);
                continue;
            }

            try {
                $entidade->setDtEventoInicio($this->getTimestamp($dtIni));
                $entidade->setDtEventoFim($this->getTimestamp($dtFim));
                $entidade->setIdCantor($idCantor);
                $this->getEntityManager()->persist($entidade);

                $this->getEntityManager()->flush();
                $this->getEntityManager()->clear();

            } catch (\Exception $e) {
                return false;
            }
        }

        return true;
    }

    /**
     * Validar se uma data e verdadeira
     *
     * @param $date
     * @param string $format
     * @return bool
     */
    public function validarData($date, $format = 'd/m/Y H:i')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    /**
     * Converte uma data string e retorna o timestamp
     *
     * @param $date
     * @param string $format
     * @return int
     */
    public function getTimestamp($date, $format = 'd/m/Y H:i')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d->getTimestamp();
    }

    /**
     * Retorna a agenda montada
     *
     * @param int $limite
     * @return mixed
     */
    public function getAgenda($limite = 5)
    {
        $agenda = $this->getRepository('Application\Entity\TbEvento')->getEventosAgenda($limite);
        return $agenda;
    }
}