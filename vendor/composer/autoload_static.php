<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf9bef67cc959ec8bc100fb12f4334c5
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf9bef67cc959ec8bc100fb12f4334c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf9bef67cc959ec8bc100fb12f4334c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf9bef67cc959ec8bc100fb12f4334c5::$classMap;

        }, null, ClassLoader::class);
    }
}
