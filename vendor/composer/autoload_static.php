<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b8ae02d42a2f0fc5ad911bbe6f1a5c2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Andreyco\\Instagram\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Andreyco\\Instagram\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/andreyco/instagram/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b8ae02d42a2f0fc5ad911bbe6f1a5c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b8ae02d42a2f0fc5ad911bbe6f1a5c2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
