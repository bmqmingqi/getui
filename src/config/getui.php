<?php
return [
    // APP_EVN
    'app_env' => env('APP_ENV') == 'production' ? 'production' : 'development',

    // The default default_client name which configured in `development` or `production` section
    'default_client' => 'client_1',


    'development' => [
        'client_1' => [
            'gt_appid' => 'XXXXXXXX',
            'gt_appkey' => 'XXXXX',
            'gt_appsecret' => 'XXXXX',
            'gt_mastersecret' => 'XXXXXXXX',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        // other client_3   ......
    ],
    'production' => [
        'client_1' => [
            'gt_appid' => 'XXXX',
            'gt_appkey' => 'XXXX',
            'gt_appsecret' => 'XXXX',
            'gt_mastersecret' => 'XXXX',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ]

        // other client_3   ......

    ],
];
