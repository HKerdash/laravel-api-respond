## Laravel API Respond

### Overview
Laravel API Respond is a package designed to simplify the process of generating JSON responses in Laravel applications. It provides a convenient way to structure responses with consistent keys and formats, making API development more efficient.

### Installation
You can install the package via Composer by running the following command:
```
composer require hassankerdash/laravel-api-respond
```

### Usage
After installation, you can use the `Respond` service provided by the package to generate JSON responses in your Laravel controllers or services.

#### Basic Usage
```php
// Generate a successful response
return respond()->success(['key' => 'value'], 'Operation completed successfully');

// Generate an error response
return respond()->error('Bad request');
respond()->error('Bad request')->throwResponse();
```

### Methods
The `Respond` service provides the following methods for generating JSON responses:

- `success($data, $message = null, $code = 200, $status = true)`: Generate a successful response.
- `error($message, $data = null, $code = 400, $status = false)`: Generate an error response.
- `ok($data, $message = null, $code = 200, $status = true)`: Generate a response indicating success with status code 200.
- `created($data, $message = null, $code = 201, $status = true)`: Generate a response indicating successful resource creation.
- `accepted($data, $message = null, $code = 202, $status = true)`: Generate a response indicating that the request has been accepted for processing.
- `noContent($message = null, $code = 204, $status = true)`: Generate a response with no content.
- `badRequest($message, $data = null, $code = 400, $status = false)`: Generate a response indicating a bad request.
- `notFound($message, $data = null, $code = 404, $status = false)`: Generate a response indicating that the requested resource was not found.
- `methodNotAllowed($message, $data = null, $code = 405, $status = false)`: Generate a response indicating that the request method is not allowed.
- `conflict($message, $data = null, $code = 409, $status = false)`: Generate a response indicating a conflict.
- `...` (and more)

### License
This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Author
- [Hassan Kerdash](https://github.com/kerdash)

### Contributing
Contributions are welcome! Feel free to submit issues or pull requests on [GitHub](https://github.com/kerdash/laravel-api-respond).

### Support
For any questions or support, please contact Hassan Kerdash via [GitHub Issues](https://github.com/kerdash/laravel-api-respond/issues).

### Changelog
See the [CHANGELOG.md](https://github.com/kerdash/laravel-api-respond/blob/main/CHANGELOG.md) file for details on changes.

### Versioning
This package follows [Semantic Versioning](https://semver.org/).

### Security Vulnerabilities
If you discover a security vulnerability within this package, please send an e-mail to Hassan Kerdash via [kerdash@gmail.com](mailto:kerdash@gmail.com). All security vulnerabilities will be promptly addressed.

### Acknowledgements
Special thanks to all contributors and the Laravel community.

### Keywords
Laravel, API, Respond, JSON, Response, Package

### Tags
Laravel, API, Respond, JSON, Response, Package

### Links
- [GitHub Repository](https://github.com/kerdash/laravel-api-respond)
- [Packagist Package](https://packagist.org/packages/kerdash/laravel-api-respond)