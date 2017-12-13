# Spartan Realm SDK - Laravel Binding

Simple!

Add composer dependency

 ```composer require loopy/spartan-sdk-laravel```

Add config in the services.php file
```php
    'spartan' => [
        'id' => env('SPARTAN_APP_ID'),
        'secret' => env('SPARTAN_APP_SECRET'),
    ],
``` 
Set the environment variables
 
```SPARTAN_APP_ID=some_string```

```SPARTAN_APP_SECRET=some_other_string```


You can extend the  ```Customer``` class

```php
use Loopy\Spartan\Customer;

class Member extends Customer
{

}
```

You can use it as 

```php
Member::query()->find('national', '12345678')
```

For the sdk documentation the ```Customer``` class extends the Member class provided by the sdk, all the methods found there can be used. Refer to the SDK documentation