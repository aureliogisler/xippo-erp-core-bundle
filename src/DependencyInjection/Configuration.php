<?php 

declare(strict_types=1);

namespace Xippogmbh\XippoErpCoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('xippo_erp_core');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('myTestBoolean')->defaultTrue()->info('Switch ON and OFF the Office365 Auth.')->end()
                ->integerNode('myTestInteger')->defaultValue(5)->info('Insert the App-Key of Azure App')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}