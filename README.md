# Web based system

This is the web based system, built in Laravel and blade.

## To run

Assuming you've set up the site to be available on localhost or (using Laravel Valet on Mac, for instance):

```bash
$ npm run watch
```

Then open https://innojo.test in a browser.

## Installation

Clone the repository locally. Make sure you have a working LAMP/WAMP/MAMP stack. You can use Homestead, Valet or localhost
too. Install composer, nodejs and npm. Make sure you have mysql installed and a database ready to use.

Set update an `.env` file:

Next you'll need to run migrations:

```bash
$ php artisan migrate
```

## API calls

We use the excellent Axios library to do AJAX API calls. POSTs require a CSRF token, which is extracted
from the HTML page (Laravel adds a CSRF meta tag to each HTML page).
