<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b54aa225d36515b4c1e0df581b94e99
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b54aa225d36515b4c1e0df581b94e99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b54aa225d36515b4c1e0df581b94e99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b54aa225d36515b4c1e0df581b94e99::$classMap;

        }, null, ClassLoader::class);
    }
}