<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class SetIniTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'SetIni';
    }

    public function getFilters()
    {
        return array(
            'setIni' => new Twig_Filter_Method($this, 'setIni'),
        );
    }

    // pass a param like 'memory_limit' and a value like '128M' to set this param for your page/template
    public function setIni($param, $value)
    {
        ini_set($param, $value);
        return ini_get($param);
    }
}
