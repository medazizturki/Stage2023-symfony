<?php

namespace ContainerFxNjWUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IGUm1r8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iGUm1r8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iGUm1r8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.iGUm1r8.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.iGUm1r8": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
