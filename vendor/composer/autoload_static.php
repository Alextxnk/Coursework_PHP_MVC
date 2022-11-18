<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit733335f3fb02aa8b5d20c3284b7b3bc8
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/App.php',
        'ComposerAutoloaderInit733335f3fb02aa8b5d20c3284b7b3bc8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit733335f3fb02aa8b5d20c3284b7b3bc8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/database/Connection.php',
        'CreatePostTable' => __DIR__ . '/../..' . '/database/migrations/CreatePostTable.php',
        'CreateUserTable' => __DIR__ . '/../..' . '/database/migrations/CreateUserTable.php',
        'Request' => __DIR__ . '/../..' . '/Request.php',
        'Router' => __DIR__ . '/../..' . '/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit733335f3fb02aa8b5d20c3284b7b3bc8::$classMap;

        }, null, ClassLoader::class);
    }
}
