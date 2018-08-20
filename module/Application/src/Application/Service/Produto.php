<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

use Application\Entity\TbProduto;
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
}