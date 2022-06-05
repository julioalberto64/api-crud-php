<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc508f6a38c26f77f1af83445f5b8645b
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

        spl_autoload_register(array('ComposerAutoloaderInitc508f6a38c26f77f1af83445f5b8645b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc508f6a38c26f77f1af83445f5b8645b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc508f6a38c26f77f1af83445f5b8645b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
