<?php

return array(        
    
    /*
     * Additional One Signal App Go Here, In case your app need multiple one signal app
     */
    
    /*
	|--------------------------------------------------------------------------
	| One Signal App Id Extra
	|--------------------------------------------------------------------------
	|
	|
	*/
    'app_id_extra' => env('ONE_SIGNAL_APP_ID_EXTRA', 'YOUR-APP-ID-EXTRA-HERE'),
    
    /*
	|--------------------------------------------------------------------------
	| Rest API Key Extra
	|--------------------------------------------------------------------------
	|
    |
	|
	*/
    'rest_api_key_extra' => env('ONE_SIGNAL_REST_API_KEY_EXTRA', 'YOUR-REST-API-KEY-EXTRA-HERE'),
    
    /*
	|--------------------------------------------------------------------------
	| User Auth Key Extra
	|--------------------------------------------------------------------------
	|
    |
	|
	*/
    'user_auth_key_extra' => env('ONE_SIGNAL_USER_AUTH_KEY_EXTRA', 'YOUR-USER-AUTH-KEY-EXTRA-HERE'),
    
    'supported_devices_extra' => [
        'ios'           => 0,
        'android'       => 1
    ],
);