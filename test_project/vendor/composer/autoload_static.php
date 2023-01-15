<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit092d3d6dd0ef56250bfe2e02fcc32e74
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Damir\\Test\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Damir\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit092d3d6dd0ef56250bfe2e02fcc32e74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit092d3d6dd0ef56250bfe2e02fcc32e74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit092d3d6dd0ef56250bfe2e02fcc32e74::$classMap;

        }, null, ClassLoader::class);
    }
}