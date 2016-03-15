<?php
use Aliance\Kanchanaburi\Config\Config;
use Aliance\Kanchanaburi\Server\Server;

return [
    APPLICATION_SERVER => [
        'secure_user' => 'www',
        'roles' => [
            Server::ROLE_WEB,
            Server::ROLE_CRON,
            Server::ROLE_STATICS,
        ],
        'nginx' => [
            Server::ROLE_WEB => [
                'listen'       => '80',
                'server_names' => Config::getInstance()->get('domains.web'),
                'socket'       => 'unix:/var/run/php5-fpm.sock',
            ],
            Server::ROLE_STATICS => [
                'listen'       => '80',
                'server_names' => Config::getInstance()->get('domains.statics'),
            ],
        ],
        'cron' => [
            Server::ROLE_CRON => [
                'user' => 'www',
            ],
        ],
    ],
];
