<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit971d66626fcb20ee4088d8aafc4d91fb
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit971d66626fcb20ee4088d8aafc4d91fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit971d66626fcb20ee4088d8aafc4d91fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
