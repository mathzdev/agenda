<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 25/10/15
 * Time: 08:54
 */

namespace Application\Service;

/**
 * Class AbstractService
 * @package Application\Service
 */
class AbstractService
{
    /**
     * Gerenciador de entidades
     *
     * @var $em
     */
    protected $em;

    /**
     * Construtor da classe
     *
     * @param $objectManager
     */
    public function __construct($objectManager)
    {
        $this->em = $objectManager;
    }

    /**
     * Retorna a repository especificada, caso nao passe em parametro busca uma repository com base na service
     *
     * @param $repository
     * @return mixed
     */
    public function getRepository($repository = null)
    {
        if ($repository == null) {
            $repositoryName = get_class($this);
            $repositoryName = str_replace('Service', 'Entity', $repositoryName);
            return $this->em->getRepository($repositoryName);
        } else {
            return $this->em->getRepository($repository);
        }
    }

    /**
     * Transforma string em camel case: string_de_teste -> stringDeTeste
     *
     * @param $scored
     *
     * @return string
     */
    public function camelize($scored)
    {
        if (count(explode('_', $scored)) == 1) {
            return $scored;
        }

        return lcfirst(implode('', array_map('ucfirst', array_map('strtolower', explode('_', $scored)))));
    }

    /**
     * Retorna todos os registros da tabela
     *
     * @return mixed
     */
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Returna um array com registros da tabela
     *
     * @param $arrParam
     * @param $arrWhere
     * @param $limit
     * @param $offset
     *
     * @return mixed
     */
    public function findBy($arrParam, $arrWhere = array(), $limit = null, $offset = null)
    {
        $arrFind = array();

        foreach ($arrParam as $key => $param) {
            $arrFind[$this->camelize($key)] = $param;
        }

        return $this->getRepository()->findBy($arrFind, $arrWhere, $limit, $offset);
    }

    /**
     * Returna um registro especifico da tabela
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->getRepository()->find($id);
    }

    /**
     * Retorna a entidade desse servico
     *
     * @param $repository
     * @return mixed
     */
    public function getEntity($repository = null)
    {
        if ($repository == null) {
            $repositoryName = get_class($this);
            $repositoryName = str_replace('Service', 'Entity', $repositoryName);
            return new $repositoryName();
        } else {
            return new $repository();
        }
    }

    /**
     * Retorna o gerenciador de entidades
     *
     * @return mixed
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * Retorna se esse arquivo e uma imagem
     *
     * @param $img
     * @return bool
     */
    public function isImage($img){
        return (bool) getimagesize($img);
    }
}