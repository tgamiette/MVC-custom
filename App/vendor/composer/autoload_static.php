<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b9bcdb2843bfd45da8a09df56ca8e4d
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b9bcdb2843bfd45da8a09df56ca8e4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b9bcdb2843bfd45da8a09df56ca8e4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b9bcdb2843bfd45da8a09df56ca8e4d::$classMap;

        }, null, ClassLoader::class);
    }
}
