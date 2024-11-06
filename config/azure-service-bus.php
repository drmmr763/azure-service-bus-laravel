<?php

// config for ReedTech/AzureServiceBus
return [
	'tenant' => env('SERVICE_BUS_TENANT'),
	'namespace' => env('SERVICE_BUS_NAMESPACE'),
	'cache_driver' => env('SERVICE_BUS_CACHE_DRIVER', 'redis'),
    'azure' => [
        'client_id' => env('SERVICE_BUS_CLIENT_ID'),
        'client_secret' => env('SERVICE_BUS_CLIENT_SECRET')
    ]
];
