<?php
/**
 * Created by PhpStorm.
 * User: dantemgs
 * Date: 15.01.2019
 * Time: 12:01
 */

namespace app\engine;


use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('../views/twig');
        $this->twig = new \Twig_Environment($loader);
    }

    public function renderTemplate($template, $params = [])
    {
        $template .= ".twig";
//        var_dump($template);
//        var_dump($params);
        return $this->twig->render($template, $params);
    }
}