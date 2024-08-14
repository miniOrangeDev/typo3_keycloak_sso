<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Keycloak SSO',
    'description' => 'Keycloak SSO extension for Typo3 allows your backend and frontend users to log into TYPO3 using Keycloak credentials.',
    'author' => 'miniOrange',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.30-12.4.99',
        ],
    ],
    'version' => '2.0.1',
    'icon' => 'EXT:keycloak_sso/Resources/Public/Icons/Extension.svg',
    'state' => 'stable',
    'autoload' => [
        'psr-4' => [
            'Miniorange\\KeycloakSSO\\' => 'Classes/',
        ],
    ],
    'icon' => 'EXT:keycloak_sso/Resources/Public/Icons/Extension.png'
];
