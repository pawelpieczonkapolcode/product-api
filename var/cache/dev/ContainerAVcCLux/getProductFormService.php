<?php

namespace ContainerAVcCLux;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProductForm' shared autowired service.
     *
     * @return \App\Form\ProductForm
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProductForm.php';

        return $container->privates['App\\Form\\ProductForm'] = new \App\Form\ProductForm();
    }
}
