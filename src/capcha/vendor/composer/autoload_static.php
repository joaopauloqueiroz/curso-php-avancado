<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e109f3fd81bf3b6203ffb215bddc1ef
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e109f3fd81bf3b6203ffb215bddc1ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e109f3fd81bf3b6203ffb215bddc1ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
