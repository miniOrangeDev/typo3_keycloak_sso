<?php

use Miniorange\KeycloakSSO\Controller\BeoidcController;

/**
 * Definitions for modules provided by EXT:examples
 */
return [
    'tools_keycloak_sso' => [
        'parent' => 'tools',
        'position' => [],
        'access' => 'user,group',
        'workspaces' => 'live',
        'iconIdentifier' => 'keycloak_sso-plugin-bekey',
        'path' => 'module/tools/beoidckey',
        'labels' => 'LLL:EXT:keycloak_sso/Resources/Private/Language/locallang_bekey.xlf',
        'extensionName' => 'keycloak_sso',
        'controllerActions' => [
            BeoidcController::class => 'request',
        ],
    ]
];