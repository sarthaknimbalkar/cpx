<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit211e0b4d5e93f016ebb9633a2667422d
{
    public static $files = array (
        '449979317570d20e60567817997eabfb' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cpx\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cpx\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit211e0b4d5e93f016ebb9633a2667422d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit211e0b4d5e93f016ebb9633a2667422d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit211e0b4d5e93f016ebb9633a2667422d::$classMap;

        }, null, ClassLoader::class);
    }
}
