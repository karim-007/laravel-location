<?php

namespace Karim007\LaravelLocation\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static getLocationByIp($ip, $format='json')
 * @method static getLocationByLatLon($lat, $lon, $format='json')
 */
class LaravelLocation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Karim007\LaravelLocation\Location\Location::class;
    }
}
