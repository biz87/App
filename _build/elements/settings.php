<?php

return [
    'friendly_urls' => [
        'key' => 'friendly_urls',
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'furls',
        'namespace' => 'core',
    ],
    'use_alias_path' => [
        'key' => 'use_alias_path',
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'furls',
        'namespace' => 'core',
    ],
    'friendly_alias_translit' => [
        'key' => 'friendly_alias_translit',
        'xtype' => 'textfield',
        'value' => 'russian',
        'area' => 'furls',
        'namespace' => 'core',
    ],
    'link_tag_scheme' => [
        'key' => 'link_tag_scheme',
        'xtype' => 'textfield',
        'value' => 'abs',
        'area' => 'site',
        'namespace' => 'core',
    ],
    'emailsender' => [
        'key' => 'emailsender',
        'xtype' => 'textfield',
        'value' => 'info@megawebs.kz',
        'area' => 'authentication',
        'namespace' => 'core',
    ],
    'feed_modx_news_enabled' => [
        'key' => 'feed_modx_news_enabled',
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'system',
        'namespace' => 'core',
    ],
    'feed_modx_security_enabled' => [
        'key' => 'feed_modx_security_enabled',
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'system',
        'namespace' => 'core',
    ],
    'log_deprecated' => [
        'key' => 'log_deprecated',
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'system',
        'namespace' => 'core',
    ],
//    'pdotools_elements_path' => [
//        'key' => 'pdotools_elements_path',
//        'xtype' => 'textfield',
//        'value' => '{core_path}components/app/elements/',
//        'area' => 'pdotools_main',
//        'namespace' => 'pdotools',
//    ],
    'fenom_parser' => [
        'key' => 'pdotools_fenom_parser',
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'pdotools_main',
        'namespace' => 'pdotools',
    ],
];