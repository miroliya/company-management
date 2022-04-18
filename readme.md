# Company Management System

### Installation
Install the dependencies and devDependencies.

For both environment
```sh
$ composer install
$ cp .env.example .env 
$ nano .env // set all credentials(ex: database, shopify api key and secret)
$ php artisan migrate
```

```shell script
php artisan storage:link
```
