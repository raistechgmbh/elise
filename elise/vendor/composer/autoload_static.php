<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit226a3eb3126ffaf9630ed3f8b2126be1
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elise\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elise\\' => 
        array (
            0 => __DIR__ . '/..' . '/elise/src',
        ),
    );

    public static $classMap = array (
        'Elise\\Config' => __DIR__ . '/..' . '/elise/src/config.php',
        'Elise\\Controller' => __DIR__ . '/..' . '/elise/src/userfunctions.php',
        'Elise\\Db' => __DIR__ . '/..' . '/elise/src/db/db.php',
        'Elise\\DbQuery\\MultiReturn' => __DIR__ . '/..' . '/elise/src/query/multi_return.php',
        'Elise\\DbQuery\\SingleReturn' => __DIR__ . '/..' . '/elise/src/query/single_return.php',
        'Elise\\Db\\Filecaching' => __DIR__ . '/..' . '/elise/src/db/filecaching.php',
        'Elise\\Router\\Routes' => __DIR__ . '/..' . '/elise/src/routes/routes.php',
        'Elise\\Router\\Selector' => __DIR__ . '/..' . '/elise/src/routes/selector.php',
        'Elise\\Viewer\\Views' => __DIR__ . '/..' . '/elise/src/views/views.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit226a3eb3126ffaf9630ed3f8b2126be1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit226a3eb3126ffaf9630ed3f8b2126be1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit226a3eb3126ffaf9630ed3f8b2126be1::$classMap;

        }, null, ClassLoader::class);
    }
}
