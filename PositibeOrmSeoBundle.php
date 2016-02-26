<?php

namespace Positibe\Bundle\OrmSeoBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PositibeOrmSeoBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        if (!class_exists('Doctrine\ORM\Version')
            || !class_exists('Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterMappingsPass')
            || !class_exists('Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass')
        ) {
            return;
        }

        $container->addCompilerPass(
            DoctrineOrmMappingsPass::createXmlMappingDriver(
                array(
                    realpath(__DIR__ . '/Resources/config/doctrine-model') => 'Symfony\Cmf\Bundle\SeoBundle\Model',
                ),
                array('cmf_seo.dynamic.persistence.orm.manager_name'),
                'cmf_seo.backend_type_orm',
                array('CmfSeoBundle' => 'Symfony\Cmf\Bundle\SeoBundle\Model')
            )
        );

    }
}
