# About

Regarding the Laraindonesia Package, it is possible to display the validation of your laravel project in Indonesian.
<br>

## Getting Started

To start using this package can be done by the composer, open your laravel project and do the installation as below :
<br> <br>

<code>
$ composer require ravialdo/laraindonesia
</code>

<br>
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
Which provider or tag's files would you like to publish? :
  
[9 ] Provider: Ravialdo\LaraIndonesia\Providers\LaraIndonesiaServiceProvider
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
