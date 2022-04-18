<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit162ac32829be2ceaa8b46ce263dbd19e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit162ac32829be2ceaa8b46ce263dbd19e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit162ac32829be2ceaa8b46ce263dbd19e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit162ac32829be2ceaa8b46ce263dbd19e::$classMap;

        }, null, ClassLoader::class);
    }
}
