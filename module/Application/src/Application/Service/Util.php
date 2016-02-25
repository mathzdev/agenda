<?php
/**
 * Created by PhpStorm.
 * User: es010
 * Date: 26/11/2015
 * Time: 17:25
 */

namespace Application\Service;

/**
 * Class Util
 * @package Application\Service
 */
class Util extends AbstractService
{
    /**
     * url do site para configs internas
     *
     * @var string
     */
    public $urlSite = 'http://habbonados.com.br/';

    /***
     * Gerar uma hash para url
     *
     * @param $texto
     * @return string
     */
    public function generateStringHash($texto)
    {
        $texto = html_entity_decode($texto);
        $texto = preg_replace('/[aáàãâä]/i','a',$texto);
        $texto = preg_replace('/[eéèêë]/i','e',$texto);
        $texto = preg_replace('/[iíìîï]/i','i',$texto);
        $texto = preg_replace('/[oóòõôö]/i','o',$texto);
        $texto = preg_replace('/[uúùûü]/i','u',$texto);
        $texto = preg_replace('/[ç]/i','c',$texto);
        $texto = preg_replace('/[ñ]/i','n',$texto);
        $texto = preg_replace('/( )/','-',$texto);
        $texto = preg_replace('/[^a-z0-9\-]/i','',$texto);
        $texto = preg_replace('/--/','-',$texto);

        return strtolower($texto);
    }

    /**
     * Funcao para limitar e inserir reticencias em uma frase
     *
     * @param $texto
     * @param $num
     * @return string
     */
    public function limitarFrase($texto, $num){
        $palavra = strlen($texto);
        $nova_palavra = substr($texto, 0, $num);
        if($palavra > $num){
            return $nova_palavra . '...';
        } else {
            return $texto;
        }
    }

    /**
     * Gerar uma url com id e hash
     *
     * @param $id
     * @param $string
     * @return string
     */
    public function generateUrlWithHashAndId($id, $string)
    {
        return $id . '-' . $this->generateStringHash($string);
    }

    /**
     * Converter array para xml
     *
     * @param array $arr
     * @param LibSimpleXMLElement $xml
     * @return LibSimpleXMLElement
     */
    public function arrayToXml(array $arr, LibSimpleXMLElement $xml)
    {
        foreach ($arr as $k => $v) {
            if (is_numeric($k)) {
                $k = 'url';
            }

            is_array($v)
                ? $this->arrayToXml($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }
        return $xml;
    }

    /**
     * Remover acentuacao de palavras
     *
     * @param $texto
     * @return string
     */
    public function retiraAcentos($texto)
    {
        $map = array(
            'á' => 'a',
            'à' => 'a',
            'ã' => 'a',
            'â' => 'a',
            'é' => 'e',
            'ê' => 'e',
            'í' => 'i',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ú' => 'u',
            'ü' => 'u',
            'ç' => 'c',
            'Á' => 'A',
            'À' => 'A',
            'Ã' => 'A',
            'Â' => 'A',
            'É' => 'E',
            'Ê' => 'E',
            'Í' => 'I',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ú' => 'U',
            'Ü' => 'U',
            'Ç' => 'C'
        );

        return strtr($texto, $map);
    }

    /**
     * Converter timestamp para um tempo em string (quantidade de tempo que passou)
     *
     * @param $session_time
     * @param bool|false $future
     * @return string
     */
    public function timePast($session_time, $future = false)
    {
        if ($future) {
            $time_difference = $session_time - time();
        } else {
            $time_difference = time() - $session_time;
        }

        $seconds = $time_difference;
        $minutes = round($time_difference / 60);
        $hours = round($time_difference / 3600);
        $days = round($time_difference / 86400);
        $weeks = round($time_difference / 604800);
        $months = round($time_difference / 2419200);
        $years = round($time_difference / 29030400);

        // Seconds
        if ($seconds <= 60) {
            return "$seconds segundos";
        }

        // Minutes
        else
            if ($minutes <= 60) {
                if ($minutes == 1) {
                    return "1 minuto";
                }
                else {
                    return "$minutes minutos";
                }
            }

            // Hours
            else
                if ($hours <= 24) {
                    if ($hours == 1) {
                        return "1 hora";
                    }
                    else {
                        return "$hours horas";
                    }
                }

                // Days
                else
                    if ($days <= 7) {
                        if ($days == 1) {
                            return "1 dia";
                        }
                        else {
                            return "$days dias";
                        }
                    }

                    // Weeks
                    else
                        if ($weeks <= 4) {
                            if ($weeks == 1) {
                                return "1 semana";
                            }
                            else {
                                return "$weeks semanas";
                            }
                        }

                        // Months
                        else
                            if ($months <= 12) {
                                if ($months == 1) {
                                    return "1 mês";
                                }
                                else {
                                    return "$months meses";
                                }
                            }

                            // Years
                            else {
                                if ($years == 1) {
                                    return "1 ano";
                                }
                                else {
                                    return "$years anos";
                                }
                            }
    }

    /**
     * Retorna a string da imagem
     *
     * @param $imageurl
     * @return mixed
     */
    public function getImageString($imageurl)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $imageurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // good edit, thanks!
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); // also, this seems wise considering output is image.
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    /**
     * String json
     *
     * @param $input
     * @return mixed
     */
    public function escapeJsonString($input) {
        return html_entity_decode(preg_replace_callback("/(&#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $input));
    }

    /**
     * Converter todos os registros de um array em utf-8
     *
     * @param $d
     * @return array|string
     */
    public function utf8ize($d)
    {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = $this->utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }

    /**
     * Criar blockquote bbcode bloco de citacao
     *
     * @param $input
     * @return mixed
     */
    public function quote($input) {
        $regex = '#\[quote]((?:[^[]|\[(?!/?quote\])|(?R))+)\[/quote\]#i';
        if (is_array($input))
        {
            $input = '<blockquote class="quote-forum">' . $input[1] . '</blockquote>';
        }

        return preg_replace_callback($regex, array(get_class($this), 'quote'), $input);
    }

    /**
     * Converte string bbcode em html
     *
     * @param $texto
     * @return mixed|string
     */
    public function bbcode($texto) {
        $a = array(
            "/\v+|\\\[rn]/",
            "/\[i\](.*?)\[\/i\]/is",
            "/\[b\](.*?)\[\/b\]/is",
            "/\[u\](.*?)\[\/u\]/is",
            "/\[s\](.*?)\[\/s\]/is",
            "/\[cor=(.*?)\](.*?)\[\/cor\]/is",
            "/\[img\](.*?)\[\/img\]/is",
            "/\[url=(.*?)\](.*?)\[\/url\]/is",
            "/\[youtube\](.*?)\[\/youtube\]/is",
            "/\[amigo\](.*?)\[\/amigo\]/is"
        );
        $b = array(
            "<br>",
            "<i>$1</i>",
            "<b>$1</b>",
            "<u>$1</u>",
            "<span style='text-decoration: line-through;'>$1</span>",
            "<span style='color: $1'>$2</span>",
            "<a href=\"$1\" class=\"habbonadoszoom\"><img src=\"$1\" style=\"max-width: 98%; margin: 5px\" /></a>",
            "<a href=\"$1\">$2</a>",
            "<iframe src=\"http://www.youtube.com/embed/$1\" style=\"display: block; width: 100%; height: 300px; margin: 5px 0\"></iframe>",
            "<a href=\"home/$1\" class=\"nome-usuario\">$1</a>"
        );
        $texto = preg_replace($a, $b, $texto);
        $texto = nl2br($texto);
        $texto = $this->quote($texto);
        return $texto;
    }
}

class LibSimpleXMLElement extends \SimpleXMLElement {

    function addChild($name
        ,$value     = null
        ,$namespace = null
    ) {
        $tmpNode = parent::addChild($name,null,$namespace);
        $tmpNode->{0} = $value;
        return $tmpNode;
    }

}