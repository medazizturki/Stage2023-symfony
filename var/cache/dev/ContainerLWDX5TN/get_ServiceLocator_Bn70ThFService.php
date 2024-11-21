<?php

namespace ContainerLWDX5TN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bn70ThFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bn70ThF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bn70ThF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.bn70ThF.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.bn70ThF": it references class "App\\Entity\\Produit" but no such service exists.'],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'produit' => 'App\\Entity\\Produit',
            'produitRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
