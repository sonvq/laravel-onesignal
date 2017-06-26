<?php

namespace Sonvq\OneSignal;

use Illuminate\Support\Facades\Facade;

class OneSignalExtraFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'onesignalextra';
    }

}