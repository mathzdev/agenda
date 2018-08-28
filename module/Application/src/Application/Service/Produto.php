<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

use Zend\Session\Container;

/**
 * Class Produto
 * @package Application\Service
 */
class Produto extends AbstractService
{
    public function importarProdutos()
    {
        $arrProdutos = $this->getProdutosXml();
        $min = 0;
        $max = count($arrProdutos);

        if (count($this->getRepository('Application\Entity\TbProduto')->findAll()) > 0) {
            exit('Você já importou produtos');
        }

        try {
            foreach ($arrProdutos as $produto) {
                if ($min < $max) {
                    $produto->codCardapio = strlen($produto->codCardapio) == 2 ? '0' . $produto->codCardapio : $produto->codCardapio;

                    $entidade = $this->getEntity('Application\Entity\TbProduto');

                    $diretorioUpload = getcwd() . '/public/data/';
                    $destinoImg = md5(time()) . '.' . pathinfo($produto->img, PATHINFO_EXTENSION);

                    file_put_contents($diretorioUpload . $destinoImg, file_get_contents($produto->img));

                    $entidade->setCodCardapio($produto->codCardapio);
                    $entidade->setNome(str_replace($produto->codCardapio . ' - ', '', trim($produto->titulo)));
                    $entidade->setDescricao(trim($produto->descricao));
                    $entidade->setValor(str_replace('R$', '', trim($produto->meta->price)));
                    $entidade->setIdCategoriaProduto($this->getRepository('Application\Entity\TbCategoriaProduto')->find((int)$produto->category));
                    $entidade->setImg('/data/' . $destinoImg);

                    if (isset($produto->meta->subtitle)) {
                        $entidade->setResumo($produto->meta->subtitle);
                    }

                    $this->getEntityManager()->persist($entidade);
                    $this->getEntityManager()->flush();
                }

                sleep(1);

                $min++;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        exit;
    }

    public function getProdutosXml()
    {
        $url = 'http://paraibacarnedesol.com.br/exportar-xml/';
        return json_decode(file_get_contents($url));
    }

    public function categoriaSessaoAtual()
    {
        $categoriaSession = new Container('categoria_session');

        if (is_null($categoriaSession->idCategoriaAtual)) {
            return $this->getRepository('Application\Entity\TbCategoriaProduto')->find(1);
        } else {
            return $this->getRepository('Application\Entity\TbCategoriaProduto')->find($categoriaSession->idCategoriaAtual);
        }
    }

    public function mudarCategoria($idCategoriaAtual, $redirect)
    {
        $categoriaSession = new Container('categoria_session');
        $categoriaSession->idCategoriaAtual = $idCategoriaAtual;
        $redirect->toUrl('/produtos');
    }

    public function insereProduto($arrParam, $files)
    {
        $arrInsert = array();
        if (count($files['img']) > 1 && strlen($files['img']['type']) > 1 && $this->isImage($files['img']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' . explode('/', $files['img']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['img']['tmp_name'], $arquivo)) {
                $arrParam['img'] = '/data/' . $nomeFile;
            } else {
                $arrParam['img'] = null;
            }
        } else {
            $arrParam['img'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity('Application\Entity\TbProduto');

        try {
            $entidade->setNome(utf8_decode($arrInsert['nome']));
            $entidade->setCodCardapio(utf8_decode($arrInsert['codigo']));
            $entidade->setDescricao(utf8_decode($arrInsert['descricao']));
            $entidade->setResumo(utf8_decode($arrInsert['resumo']));
            $entidade->setValor(utf8_decode($arrInsert['valor']));

            $categoria = $this->getRepository('Application\Entity\TbCategoriaProduto')->find($arrInsert['categoria']);
            $entidade->setIdCategoriaProduto($categoria);

            if ($arrInsert['img'] != null) {
                $entidade->setImg($arrInsert['img']);
            } else {
                $entidade->setImg('');
            }

            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function editaProduto($arrParam, $files, $idProduto)
    {
        $arrUpdate = array();

        if (count($files['img']) > 1 && strlen($files['img']['type']) > 1 && $this->isImage($files['img']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' . explode('/', $files['img']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['img']['tmp_name'], $arquivo)) {
                $arrParam['img'] = '/data/' . $nomeFile;
            } else {
                $arrParam['img'] = null;
            }
        } else {
            $arrParam['img'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->getRepository('Application\Entity\TbProduto')->find($idProduto);

        if ($arrParam['img'] != null) {
            unlink('public' . $entidade->getImg());
        }

        try {
            $entidade->setNome(utf8_decode($arrUpdate['nome']));
            $entidade->setCodCardapio(utf8_decode($arrUpdate['codigo']));
            $entidade->setDescricao(utf8_decode($arrUpdate['descricao']));
            $entidade->setResumo(utf8_decode($arrUpdate['resumo']));
            $entidade->setValor(utf8_decode($arrUpdate['valor']));

            $categoria = $this->getRepository('Application\Entity\TbCategoriaProduto')->find($arrUpdate['categoria']);
            $entidade->setIdCategoriaProduto($categoria);

            if ($arrUpdate['img'] != null) {
                $entidade->setImg($arrUpdate['img']);
            } else {
                $entidade->setImg('');
            }

            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deletaProduto($idProduto)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity('Application\Entity\TbProduto')), $idProduto);
        $cantor = $this->getRepository('Application\Entity\TbProduto')->find($idProduto);

        try {
            unlink('public' . $cantor->getImg());
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}