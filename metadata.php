<?php

/**
 * Metadata version
 */


$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oawidgettest',
    'title' => [
        'de' => 'Datetime widget - test',
        'en' => 'Datetime widget - test',
    ],
    'description' => [
        'de' => 'Das Modul testet die Widget Funktionalitaet',
        'en' => 'This module tests the widget functionality',
    ],
    'thumbnail' => '',
    'version' => '1.0',
    'author' => 'wgmv',
    'url' => '',
    'email' => '',
    'extend' => [

    ],
    'controllers' => [
        'oa_datetime_widget' => wgmv\DateTimeWidget\Component\Widget\DateTimeWidget::class,
    ],
    'templates' => [
        'widget/oa_datetime_widget.tpl' => 'wgmv/DateTimeWidget/views/tpl/widget/oa_datetime_widget.tpl',
    ],
    'blocks' => [
        [
            'template' => 'layout/header.tpl',
            'block' => 'layout_header_logo',
            'file' => 'views/blocks/header__layout_header_logo.tpl',
        ],

    ],
    'settings' => [
        [
            'group' => 'main',
            'name' => 'blDateWidgetCaching',
            'type' => 'bool',
            'value' => false,
        ],

    ],
    'events' => [
    ],
];
