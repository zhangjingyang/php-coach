<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69e62ec569188ed7e75197510187a9b9
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69e62ec569188ed7e75197510187a9b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69e62ec569188ed7e75197510187a9b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
