# Laravel CMS using Balde Views

This repository is copy of the simple [PHP/Laravel CMS](https://github.com/codeadamca/php-cms-laravel) except the CMS views have been converted from vanilla PHP to Blade.

## Requirements:

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Laravel](https://laravel.com/)

Full tutorial URL: https://codeadam.ca/learning/php-cms-laravel.html

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>

A few notes regarding the CMS:

The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
```

The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```

All user acocunts will have the default password of "password".
You can use phpAdmin to get a user email (generated randomly) to make login.


## Team

The following team was responsible for increasing the CMS functionalities to include Skill, Work and Education Sections.


|      Member    | Contributions      |
| -------------- | ---------------    |
| Akshaya Dupati| Education API/views    |
| Ewerton Xavier | Work API/views     |
| Nidhi Patel    | Skills API/views|

## License
[MIT](https://choosealicense.com/licenses/mit/)

