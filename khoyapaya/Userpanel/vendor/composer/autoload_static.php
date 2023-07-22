<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d4c2adbc56751d30b6599730af810ea
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d4c2adbc56751d30b6599730af810ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d4c2adbc56751d30b6599730af810ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
