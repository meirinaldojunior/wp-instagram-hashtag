<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72e5a98ba8608f6332d8f332b01ecf80
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetzWeb\\Instagram\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetzWeb\\Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/cosenary/instagram/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72e5a98ba8608f6332d8f332b01ecf80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72e5a98ba8608f6332d8f332b01ecf80::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}