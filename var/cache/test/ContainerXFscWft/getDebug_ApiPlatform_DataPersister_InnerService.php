<?php

namespace ContainerXFscWft;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ApiPlatform_DataPersister_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.api_platform.data_persister.inner' shared service.
     *
     * @return \ApiPlatform\Core\DataPersister\ChainDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ChainDataPersister.php';

        return $container->privates['debug.api_platform.data_persister.inner'] = new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\DataPersister\\ProfilDataPersister'] ?? $container->load('getProfilDataPersisterService'));
            yield 1 => ($container->privates['App\\DataPersister\\ProfilSortieDataPersister'] ?? $container->load('getProfilSortieDataPersisterService'));
            yield 2 => ($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService'));
        }, 3));
    }
}
