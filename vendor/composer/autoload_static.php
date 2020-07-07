<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b60790adb77e7c848e4489062baede1
{
    public static $files = array (
        'a8a49afccbd444323d4e56eac134e568' => __DIR__ . '/..' . '/pflorek/php-basic-auth/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PFlorek\\BasicAuth\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PFlorek\\BasicAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/pflorek/php-basic-auth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b60790adb77e7c848e4489062baede1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b60790adb77e7c848e4489062baede1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
