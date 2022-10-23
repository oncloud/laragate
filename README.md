# Laragate
Laragate is a simple package to help you to create a simple permission system for your Laravel App. 

## Installation
You can install the package via composer:

```bash
composer require lectero/laragate
```

## Usage
### 1. Publish the config file
```bash
php artisan vendor:publish --provider="Lectero\Laragate\LaragateServiceProvider"
```

### 2. Create a new permission
```bash
php artisan make:permission "permission name"
```

### 3. Add the trait to your User model
```php
use Lectero\Laragate\Traits\HasPermissions;

class User extends Authenticatable
{
    use HasPermissions;
}
```

### 4. Add the middleware to your routes
```php
Route::group(['middleware' => ['permission:permission name']], function () {
    // your routes
});
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits
- [Lectero](https://github.com/lectero)
- [All Contributors](../../contributors)
