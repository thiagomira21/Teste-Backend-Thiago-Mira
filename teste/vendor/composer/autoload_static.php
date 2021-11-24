<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88988de0d8e794c0ef342709cc3e8577
{
    public static $files = array (
        'a5462d9f71f9e8f00bb7d648be5d8fa9' => __DIR__ . '/../..' . '/app/Router/router.php',
        'ce6bcb40bd24d2a9a3ec317ce99f0719' => __DIR__ . '/../..' . '/app/Core/Controller.php',
        'ad7d4e67cdbb520b5c562aa291f09346' => __DIR__ . '/../..' . '/app/Helpers/Constants.php',
        'efaa6fecb09f5d2f0b6fb51816f5243b' => __DIR__ . '/../..' . '/app/Database/Connect.php',
        'f83654f25b439b525559078ff06f2dbb' => __DIR__ . '/../..' . '/app/Database/Fetch.php',
        '4d748245d5397993432780e0e07d464c' => __DIR__ . '/../..' . '/app/Database/CreateTable.php',
        '01019949a18b1e9ccf10e811633c4c1e' => __DIR__ . '/../..' . '/app/Helpers/Redirect.php',
        'a32ffaa16371a09c50d8370564f2966e' => __DIR__ . '/../..' . '/app/Helpers/Flash.php',
        '491844c58ab2c16c8da0820e6dd221d7' => __DIR__ . '/../..' . '/app/Helpers/Sessions.php',
        'eab3ba71b53577b62a370a6988b59a2a' => __DIR__ . '/../..' . '/app/Helpers/Validate.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'app\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/Controllers/LoginController.php',
        'app\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/Controllers/UserController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88988de0d8e794c0ef342709cc3e8577::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88988de0d8e794c0ef342709cc3e8577::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88988de0d8e794c0ef342709cc3e8577::$classMap;

        }, null, ClassLoader::class);
    }
}