<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita35fe00a70f2a345396321a79786d90d
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita35fe00a70f2a345396321a79786d90d::$classMap;

        }, null, ClassLoader::class);
    }
}