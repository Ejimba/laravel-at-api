# Laravel Africa's Talking API
Africa's Talking API for Laravel framework 4.2

## Installation

Add the following to the "require" section of your `composer.json` file.

```json
"ejimba/laravel-at-api": "0.1.x"
```
Run the `composer update` command.

Then, in your `config/app.php` add this line to your 'providers' array.

```php
'Ejimba\LaravelAtApi\LaravelAtApiServiceProvider',
```

After installing, you can publish the package configuration file into your application by running the following command:

```php
php artisan config:publish ejimba/laravel-at-api
```

**In the config file ensure you fill in your API KEY and USERNAME.** If you don't have the username and api key, register for a free account at [https://www.africastalking.com/account/register](https://www.africastalking.com/account/register) and get the details in the dashboard.

## Usage

To send an SMS use:

```php
LaravelAtApi::sendMessage($phoneNumber, $message);
```

## Authors

1. Ejimba Eric (www.ejimbaeric.com)

## To Do
- Add feedback/reponces form the api.
- Add error catching.
- Add receiving sms.
- Add delivery receipts.

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Changelog
### Version 0.1.0
- Added sms sending.

## Credits
1. [Guzzle](https://github.com/guzzle/guzzle)
2. [Laravel](laravel.com)

## License

Licensed under [The MIT License (MIT)](LICENSE).