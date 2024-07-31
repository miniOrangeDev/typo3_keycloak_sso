<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Keycloak SSO',
    'description' => 'Keycloak SSO extension for Typo3 allows your backend and frontend users to log into TYPO3 using Keycloak credentials.',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-12.4.99',
        ],
    ],
    'version' => '1.0.0',
    'icon' => 'EXT:keycloak_sso/Resources/Public/Icons/miniorange.svg',
    'state' => 'stable',
    'autoload' => [
        'psr-4' => [
            'Miniorange\\KeycloakSSO\\' => 'Classes/',
        ],
    ]
];
