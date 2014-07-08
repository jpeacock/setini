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

    public function setIni($number)
    {
        ini_set('memory_limit', $number."M");
        return ini_get('memory_limit');
    }
}
