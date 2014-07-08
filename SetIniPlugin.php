<?php
namespace Craft;

class SetIniPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('SetIni');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Clear';
    }

    public function getDeveloperUrl()
    {
        return 'http://clearmpls.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.setini.twigextensions.SetIniTwigExtension');

        return new SetIniTwigExtension();
    }
}
