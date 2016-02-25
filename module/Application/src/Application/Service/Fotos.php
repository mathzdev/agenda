<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class Fotos
 * @package Application\Service
 */
class Fotos extends AbstractService
{
    /**
     * Atualiza status de uma foto
     *
     * @param $arrParam
     * @param $idFoto
     *
     * @return bool
     */
    public function editaStatusFoto($arrParam, $idFoto)
    {
        $arrUpdate = array();

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->getRepository('Application\Entity\TbGaleriaInstagram')->find($idFoto);

        try {
            $entidade->setExibe($arrUpdate['exibe']);
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}