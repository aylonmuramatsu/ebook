<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3791f7a1ff57653df4f5186d3df8922
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3791f7a1ff57653df4f5186d3df8922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3791f7a1ff57653df4f5186d3df8922::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}