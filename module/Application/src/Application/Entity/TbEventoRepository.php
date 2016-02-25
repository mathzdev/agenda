<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:50
 */

namespace Application\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class TbEventoRepository
 * @package Application\Entity
 */
class TbEventoRepository extends EntityRepository
{
    /***
     * Limpar a agenda e um cantor
     *
     * @param $idCantor
     * @return bool
     */
    public function limparAgendaCantor($idCantor)
    {
        try {
            $em = $this->getEntityManager();
            $qb = $em->createQueryBuilder();
            $qb->delete('Application\Entity\TbEvento', 'e');
            $qb->where('e.idCantor = :idCantor');
            $qb->setParameter('idCantor', $idCantor);
            $qb->getQuery()->execute();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Retorna os eventos da agenda
     *
     * @param $limite
     * @return mixed
     */
    public function getEventosAgenda($limite)
    {
        $manager = $this->getEntityManager();
        $conn = $manager->getConnection();
        return $conn->query('SELECT e.id_evento, e.dt_evento_inicio, e.dt_evento_fim, c.* FROM tb_evento e, tb_cantor c WHERE c.id_cantor = e.id_cantor AND e.dt_evento_fim > ' . time() . ' ORDER BY e.dt_evento_fim ASC LIMIT ' . $limite)->fetchAll();
    }
}