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
        echo "🚗 Site is already in parked directory!"
    else
        echo "🔗 Linking site..."
        valet link
    fi

    echo '🔐 Issuing certificate...'
    valet secure
fi

cd public/

if test -f .env; then
    echo ".env file already present."
else
    if test -f .env.example; then
        mv .env.example .env
    else
        echo "KEY=value" > .env
    fi
fi


cd ..

accountcount=$(find public/site/accounts -maxdepth 1 -type d | wc -l)
if [[ "$accountcount" -eq 1 ]]; then
    tld=$(valet tld)
    sitename=$(basename "$PWD")
    echo '✅ All done!'
    echo "To install the panel, open:"
    echo "https://$sitename.$tld/panel"
else
    echo "The panel is already installed."
    echo '✅ All done!'
fi

exit 0