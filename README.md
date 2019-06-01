SimplissimeTwitch, PHP API TWITCH
=======================

## Installing SimplissimeTwitch

The recommended way to install SimplissimeTwitch is through
[Composer](http://getcomposer.org).

Next, run the Composer command to install the latest stable version of SimplissimeTwitch:
```bash
php composer.phar require SimplissimeTwitch/apitwitch
```



After installing, you need to require Composer's autoloader

```php
require 'vendor/autoload.php';
```

You can then later update SimplissimeTwitch using composer:
```bash
php composer.phar update
 ```

 SimplissimeTwitch is a PHP HTTP client that makes it easy to send HTTP requests and
trivial to integrate with web services.

- Simple interface for building query strings, POST requests, streaming large
  uploads, streaming large downloads, using HTTP cookies, uploading JSON data,
  etc...


Change information on the class

```php
/** Information of amended */
     const Streamer_Name = 'Name_Streamer'; //Replace valeur
     const Api_Twitch_ID = 'Api_Id_Twitch'; //Replace valeur
     const USER_ID_TWITCH = 'Id_Twitch'; //Replace valeur

```

```php
require 'vendor/autoload.php';

use \SimplissimeTwitch\ApiTwitch as api;
$ui = new api();
```

id streamer :

```php 
$ui->getUsers('_id')
```

name streamer

```php
$ui->getUsers('display_name')
```

total of follows : 

```php
$ui->follow('_total')
```

title of Live : 
``` php
$ui->getstatus()
```

name of game : 
```php
$ui->getgame()
```
listing followers of streamer: 

```php
$ui->followListe()
```

## Help and docs

* [Help](https://join.slack.com/t/alexcaussades/shared_invite/enQtNTMyNDI4NTU1ODU5LWFkYmM3NWY1N2I0OGRlOWIzOGUwNDRmZjZhY2U2OWQ0OWIzYzgwZWNkMWJkODhlNWQ4YTBkYzc0ZGE4YTQ3OTU)