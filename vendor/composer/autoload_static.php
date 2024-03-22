<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33aa26aec39f20a04446a7730200668d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thiriwin\\Ecommerce\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thiriwin\\Ecommerce\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33aa26aec39f20a04446a7730200668d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33aa26aec39f20a04446a7730200668d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33aa26aec39f20a04446a7730200668d::$classMap;

        }, null, ClassLoader::class);
    }
}
