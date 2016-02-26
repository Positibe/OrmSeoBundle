PositibeOrmMediaBundle
======================

This bundle provide a ORM entities to use Sonata SeoBundle.

Installation
------------

To install the bundle just add the dependent bundles:

    php composer.phar require positibe/orm-seo-bundle

Next, be sure to enable the bundles in your application kernel:

    <?php
    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            // Dependency (check that you don't already have this line)
            new Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            // Vendor specifics bundles
            new Sonata\SeoBundle\SonataSeoBundle(),
            new Symfony\Cmf\Bundle\SeoBundle\CmfSeoBundle(),
            new Positibe\Bundle\OrmSeoBundle\PositibeOrmSeoBundle(),

            // ...
        );
    }

Configuration
-------------

Import all necessary configurations to your app/config/config.yml the basic configuration.
    # app/config/config.yml
    imports:
        - { resource: @PositibeOrmSeoBundle/Resources/config/config.yml }

**Caution:** This bundle require that you register the CmfSeoBundle first and after the PositibeOrmSeoBundle to be able of override the default mapping of Symfony Cmf SeoMetadata entity.