<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit733335f3fb02aa8b5d20c3284b7b3bc8
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit733335f3fb02aa8b5d20c3284b7b3bc8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit733335f3fb02aa8b5d20c3284b7b3bc8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit733335f3fb02aa8b5d20c3284b7b3bc8::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit733335f3fb02aa8b5d20c3284b7b3bc8::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire733335f3fb02aa8b5d20c3284b7b3bc8($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire733335f3fb02aa8b5d20c3284b7b3bc8($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
