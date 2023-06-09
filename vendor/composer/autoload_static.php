<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd48da0440e44b4b5f80be0fbea5b19b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Asset\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd48da0440e44b4b5f80be0fbea5b19b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd48da0440e44b4b5f80be0fbea5b19b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd48da0440e44b4b5f80be0fbea5b19b::$classMap;

        }, null, ClassLoader::class);
    }
}
