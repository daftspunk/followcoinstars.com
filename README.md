# followcoinstars.com

Follow Crypto Rockstars - followcoinstars.com

### Install instructions

1. Create a new www directory
1. Install October `php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"`
1. Make directory writable `storage`
1. Update `~/config/cms.php` value `activeTheme` to `followcoinstars`
1. Add twitter config to `~/config/services.php`
1. Extract this repo to `themes/followcoinstars`
1. Run `composer install`
1. Make sure `follow.php` can be executed by webserver.

Twitter config

```
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    // ...

    'twitter' => [
        'key' => '',
        'secret' => '',
    ],

];
```
