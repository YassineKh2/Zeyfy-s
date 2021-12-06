<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37053aa3aad42fd113f49dd0bf292ff8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37053aa3aad42fd113f49dd0bf292ff8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37053aa3aad42fd113f49dd0bf292ff8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37053aa3aad42fd113f49dd0bf292ff8::$classMap;

        }, null, ClassLoader::class);
    }
}
