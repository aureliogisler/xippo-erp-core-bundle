<?php 

declare(strict_types=1);

namespace Xippogmbh\XippoErpCoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class XippoErpCoreExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../config')
        );
        $loader->load('services.yaml');
        
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        
        // $definition = $container->getDefinition('xippo_erp_core.main_class');
        // $definition->setArgument(0, $config['myTestInteger']);
    }

    public function getAlias()
    {
        return 'xippo_erp_core';
    }
}