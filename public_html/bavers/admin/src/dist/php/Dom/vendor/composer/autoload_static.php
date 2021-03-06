<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3bdd709eb2c6e0df2281eaf072e5e8d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'D' => 
        array (
            'DOMWrap\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\CssSelector\\' =>
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'DOMWrap\\' =>
        array (
            0 => __DIR__ . '/..' . '/scotteh/php-dom-wrapper/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3bdd709eb2c6e0df2281eaf072e5e8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3bdd709eb2c6e0df2281eaf072e5e8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
