<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08512ad6df4a4e929f5ea4c92f121059
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'obb\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'obb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08512ad6df4a4e929f5ea4c92f121059::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08512ad6df4a4e929f5ea4c92f121059::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08512ad6df4a4e929f5ea4c92f121059::$classMap;

        }, null, ClassLoader::class);
    }
}
