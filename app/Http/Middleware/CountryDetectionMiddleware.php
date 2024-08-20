<?php

// app/Http/Middleware/CountryDetectionMiddleware.php

namespace App\Http\Middleware;

use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CountryDetectionMiddleware
{
    public function handle($request, Closure $next)
    {
        
          if (session()->has('locale')) {
               $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

          
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }
        return $next($request);
          }else{
              
             $reader = new Reader(storage_path('app/geoip/GeoLite2-Country.mmdb'));

        // Get the user's IP address
        $ipAddress = $request->ip();

        // Get the country code based on the user's IP address
        $countryCode = $reader->country($ipAddress)->country->isoCode;

        // Map country code to language code
        $language = $this->getLanguageForCountry($countryCode);

        // Set the application locale
        App::setLocale($language);
        Session::put('locale', $language);

        return $next($request);
              
          }
          
    }

    private function getLanguageForCountry($countryCode)
    {
        // Implement your logic to map country code to language code
        // For example:
        switch ($countryCode) {
            case 'US':
            case 'CA':
                return 'en'; // English
            case 'FR':
                return 'fr';// French
            case 'PL':
                return 'pl';
            case 'PT':
                return 'pt';
            case 'DE':
                return 'de';
            case 'IT':
                return 'it';
            case 'ES':
                return 'es';
            // Add more cases as needed
            default:
                return 'en'; // Default language
        }
    }
}
