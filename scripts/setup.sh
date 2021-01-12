#!/bin/bash
set -e

if [ -f ".env" ]; then
    echo "Setting up application ..."

    if [ "$1" == 'dev' ] || [ "$1" == 'test' ] || [ "$1" == 'prod' ]
    then
    echo "checkout $1 branch"
    git checkout $1
    else
    echo "Enter a valid environment"
    exit 1;
    fi

    echo "installing composer dependencies"
    composer install --no-interaction --prefer-dist --optimize-autoloader

    echo "generate app key"
    php artisan key:generate

    echo "installing npm dependencies"
    npm install

    echo "compiling assets"
    npm run prod

    php artisan migrate --force

    echo "optimizing app"
    php artisan optimize

    echo "Application Setup successfully"
else
    echo ".env file not found"
fi