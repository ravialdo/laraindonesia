# About

Regarding the Laraindonesia Package, it is possible to display the validation of your laravel project in Indonesian.
<br>

## Getting Started

To start using this package can be done by the composer, open your laravel project and do the installation as below :
<br> <br>
$ composer require ravialdo/laraindonesia
<br> <br>
Laraindonesia can be used in Laravel version 7 or lower.

## Configuration
after completing install, do the following command :
<br> <br>

<code>
$ php artisan vendor::publish
</code>
<br> <br>

a choice will appear as an example :
<br> <br>

<code>
Which provider or tag's files would you like to publish?:
  
  [0 ] Publish files from all providers and tags listed below
  
  [1 ] Provider: Facade\Ignition\IgnitionServiceProvider
  
  [2 ] Provider: Fideloper\Proxy\TrustedProxyServiceProvider
  
  [3 ] Provider: Fruitcake\Cors\CorsServiceProvider
  
  [4 ] Provider: Illuminate\Foundation\Providers\FoundationServiceProvider
  
  [5 ] Provider: Illuminate\Mail\MailServiceProvider
  
  [6 ] Provider: Illuminate\Notifications\NotificationServiceProvider
  
  [7 ] Provider: Illuminate\Pagination\PaginationServiceProvider
  
  [8 ] Provider: Laravel\Tinker\TinkerServiceProvider
  
  [9 ] Provider: Ravialdo\LaraIndonesia\Providers\LaraIndonesiaServiceProvider
  
  [10] Tag: cors
  
  [11] Tag: flare-config
  
  [12] Tag: ignition-config
  
  [13] Tag: laravel-errors
  
  [14] Tag: laravel-mail
  
  [15] Tag: laravel-notifications
  
  [16] Tag: laravel-pagination
  
 > 9
 
</code>
<br> <br>

Please select Ravialdo / Laraindonesia / LaraIndonesiaServiceProvider, after selecting it will appear as below :
<br> <br>

<code>
Copied Directory [/vendor/ravialdo/laraindonesia/resources/lang] To [/resources/lang]

Publishing complete.
</code>
<br> <br>

Open the app.php file in the config folder and change it as below :
<br> <br>

<code>
  'locale' => 'in',
</code>
<br> <br>

<b>Thank you, good luck!</b>
