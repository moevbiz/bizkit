#!/bin/bash

if ! [ -x "$(command -v npm)" ]; then
    echo '❗️ Error: npm is not installed.' >&2
    exit 1
else
    echo '📦 Running npm install...'
    npm install
fi

if ! [ -x "$(command -v composer)" ]; then
    echo '❗️ Error: composer is not installed.' >&2
    exit 1
else
    echo '🎼 Running composer install...'
    cd public/ && composer install && cd ..
fi

if ! [ -x "$(command -v valet)" ]; then
    echo '❗️ Error: valet is not installed.' >&2
    exit 1
else
    parked=$(valet parked)
    if [[ "$parked" == *$PWD* ]]; then
        echo "🚗 Site is already parked."
    else
        echo "🔗 Linking site..."
        valet link
    fi

    echo '🔐 Issuing certificate...'
    valet secure
fi

cd public/

if test -f .env; then
    echo ".env file is present."
else
    if test -f .env.example; then
        cp .env.example .env
    else
        echo "KEY=value" > .env
    fi
fi

cd ..

tld=$(valet tld)
sitename=$(basename "$PWD")
accountcount=$(find public/site/accounts -maxdepth 1 -type d | wc -l)
if [[ "$accountcount" -eq 1 ]]; then
    echo '✅ All set up!'
    echo "Local site is live here: https://$sitename.$tld/"
    echo
    read -p "👤 Do you want to create an admin user? (y/n) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        while true; do
            read -p "email: " -r email
            read -p "password: " -r -s password
            echo
            php scripts/createAdmin.php $email $password
            ret=$?
            if [ $ret -eq 0 ]; then
                break
            fi
        done
        echo '✅ Panel installed!'
    else
        'Ok. You can always set up your panel user here:'
    fi
    echo "https://$sitename.$tld/panel"
else
    echo "The panel is installed."
    echo "✅ All done!" 
    echo "Local site is live here: https://$sitename.$tld/"
fi

exit 0