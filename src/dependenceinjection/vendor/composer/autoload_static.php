<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd82532696797984b7bb692148d548c45
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd82532696797984b7bb692148d548c45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd82532696797984b7bb692148d548c45::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd82532696797984b7bb692148d548c45::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}