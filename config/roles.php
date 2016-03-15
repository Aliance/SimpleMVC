<?php
use Aliance\Kanchanaburi\Server\Server;

return [
    Server::ROLE_NONE => [
        'nginx'  => '',
        'deploy' => [],
        'rules'  => [],
    ],
    Server::ROLE_WEB => [
        'nginx' => PATH_NGINX_TEMPLATE . 'web.config.phtml',
        'rules' => [
            //ServerCheckPhpVersionRule::class        => '5.5',
            //ServerCheckApcExtensionRule::class      => true,
            //ServerCheckApcVersionRule::class        => '4.0.10',
            //ServerCheckApcEnabledRule::class        => false,
        ],
    ],
    Server::ROLE_CRON => [
        'rules' => [
            //ServerCheckPhpVersionRule::class        => '5.5',
            //ServerCheckApcExtensionRule::class      => true,
            //ServerCheckApcVersionRule::class        => '4.0.10',
            //ServerCheckApcEnabledRule::class        => false,
        ],
    ],
    Server::ROLE_STATICS => [
        'nginx' => PATH_NGINX_TEMPLATE . 'statics.config.phtml',
        'rules' => [],
    ],
];
