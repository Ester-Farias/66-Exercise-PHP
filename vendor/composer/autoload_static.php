<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite62d79a20db4350e2147d2059eb4f2d5
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite62d79a20db4350e2147d2059eb4f2d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite62d79a20db4350e2147d2059eb4f2d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite62d79a20db4350e2147d2059eb4f2d5::$classMap;

        }, null, ClassLoader::class);
    }
}
