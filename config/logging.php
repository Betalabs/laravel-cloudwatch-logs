<?php

return [
    'cloudwatch' => [
        'name' => env('CLOUDWATCH_LOG_NAME', ''),
        'region' => env('CLOUDWATCH_LOG_REGION', ''),
        'key' => env('CLOUDWATCH_LOG_KEY', ''),
        'secret' => env('CLOUDWATCH_LOG_SECRET', ''),
        'stream_name' => env('CLOUDWATCH_LOG_STREAM_NAME', 'laravel_app'),
        'tag_name' => env('CLOUDWATCH_LOG_TAG_NAME', 'laravel_app'),
        'retention' => env('CLOUDWATCH_LOG_RETENTION_DAYS', 14),
        'group_name' => env('CLOUDWATCH_LOG_GROUP_NAME', 'laravel_app'),
        'version' => env('CLOUDWATCH_LOG_VERSION', 'latest'),
    ],
];
