<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite94f45d6ae46b1408e077e0417da4244
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPCompatibility\\' => 17,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPCompatibility\\' => 
        array (
            0 => __DIR__ . '/..' . '/wimg/php-compatibility/PHPCompatibility',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite94f45d6ae46b1408e077e0417da4244::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite94f45d6ae46b1408e077e0417da4244::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite94f45d6ae46b1408e077e0417da4244::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}