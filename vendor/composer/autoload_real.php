<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit314a166ba5260582b8f4ddae513579bf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit314a166ba5260582b8f4ddae513579bf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit314a166ba5260582b8f4ddae513579bf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit314a166ba5260582b8f4ddae513579bf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
