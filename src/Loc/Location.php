<?php

namespace Karim007\LaravelLocation\Location;

use Illuminate\Support\Facades\Http;

class Location
{
    /*
     *
     * method for get location by ip address
     * */
    public function getLocationByIp($ip, $format='json'){
        $country = Http::get("http://ip-api.com/$format/" . $ip);
        return $country->json();
    }

    /*
     *
     * method for get location by lat, lon
     * */
    public function getLocationByLatLon($lat, $lon, $format='json'){
        $country = Http::get("https://geocode.maps.co/reverse?lat=$lat&lon=$lon&format=$format");
        return $country->json();
    }
}
