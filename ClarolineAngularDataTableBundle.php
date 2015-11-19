<?php

namespace Claroline\AngularDataTableBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
use Claroline\AngularDataTableBundle\Installation\AdditionalInstaller;

/**
 * Bundle class.
 * Uncomment if necessary.
 */
class ClarolineAngularDataTableBundle extends PluginBundle
{
    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();
        return $config->addRoutingResource(__DIR__ . '/Resources/config/routing.yml', null, 'angulardatatable');
    }

    /*
    public function getAdditionalInstaller()
    {
        return new AdditionalInstaller();
    }
    */

    public function hasMigrations()
    {
        return false;
    }
}
