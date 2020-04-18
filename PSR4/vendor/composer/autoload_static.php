<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee3f400f037923b38ff678818e18d9b3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thanapol\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thanapol\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee3f400f037923b38ff678818e18d9b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee3f400f037923b38ff678818e18d9b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
