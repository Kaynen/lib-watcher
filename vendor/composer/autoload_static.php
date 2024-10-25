<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe1fa61074004f452be4031993caf179
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rodrigo\\LibWatcher\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rodrigo\\LibWatcher\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe1fa61074004f452be4031993caf179::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe1fa61074004f452be4031993caf179::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe1fa61074004f452be4031993caf179::$classMap;

        }, null, ClassLoader::class);
    }
}