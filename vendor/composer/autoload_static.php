<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef1165162d58e878cb310fe86f5c001e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dnolbon\\Wordpress\\' => 18,
            'Dnolbon\\WooCommerce\\' => 20,
            'Dnolbon\\Twig\\' => 13,
            'Dnolbon\\AffiliateImporter\\' => 26,
            'Dnolbon\\AffiliateImporterEnvato\\' => 32,
            'Dnolbon\\AffiliateImporterEbay\\' => 30,
            'Dnolbon\\AffiliateImporterBanggood\\' => 34,
            'Dnolbon\\AffiliateImporterAmazon\\' => 32,
            'Dnolbon\\AffiliateImporterAliexpress\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dnolbon\\Wordpress\\' => 
        array (
            0 => __DIR__ . '/..' . '/dnolbon/wordpress/src/Dnolbon/Wordpress',
        ),
        'Dnolbon\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/WooCommerce',
        ),
        'Dnolbon\\Twig\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/Twig',
        ),
        'Dnolbon\\AffiliateImporter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporter',
        ),
        'Dnolbon\\AffiliateImporterEnvato\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporterEnvato',
        ),
        'Dnolbon\\AffiliateImporterEbay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporterEbay',
        ),
        'Dnolbon\\AffiliateImporterBanggood\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporterBanggood',
        ),
        'Dnolbon\\AffiliateImporterAmazon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporterAmazon',
        ),
        'Dnolbon\\AffiliateImporterAliexpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dnolbon/AffiliateImporterAliexpress',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef1165162d58e878cb310fe86f5c001e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef1165162d58e878cb310fe86f5c001e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitef1165162d58e878cb310fe86f5c001e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}