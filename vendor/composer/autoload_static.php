<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit616a586f573e024ce4c85b86095ca873
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\Repository\\' => 15,
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/etc',
        ),
        'App\\Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Repository',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit616a586f573e024ce4c85b86095ca873::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit616a586f573e024ce4c85b86095ca873::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}