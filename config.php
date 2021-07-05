<?php
/**
 * Created by PhpStorm.
 * User: manhphucofficial
 * Date: 25/02/21
 * Time: 12:07 AM
 */

$config = [
    'id' => 'yivic-sample-2021',
    'basePath'      => WP_CONTENT_DIR,
    'components'    => [
        'wp_theme'      => [
            'class'         => 'Yivic\\Wp\\YivicSample2021\\WpTheme',
            'version'       => '0.01',
            'text_domain'   => 'yivic',
            'base_path'     => get_template_directory(),
            'base_url'      => get_template_directory_uri(),

            // only set when child theme using
            'child_base_path' => get_template_directory() === get_stylesheet_directory() ? null : get_stylesheet_directory(),
            'child_base_url' => get_template_directory_uri() === get_stylesheet_directory_uri() ? null : get_stylesheet_directory_uri(),
        ],
        'html_helper'   => [

        ],
    ],
];
return $config;
