<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cab5c1cb8ce2f84248c0a034ae8527a
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cab5c1cb8ce2f84248c0a034ae8527a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cab5c1cb8ce2f84248c0a034ae8527a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4cab5c1cb8ce2f84248c0a034ae8527a::$classMap;

        }, null, ClassLoader::class);
    }
}
