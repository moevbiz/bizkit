# 🍪 moevbiz' Kirby CMS boilerplate

A boilerplate for Kirby CMS websites, featuring minimal, opinionated configuration, some plugin dependencies, and a setup script for quick installation from the CLI. 

Intended to be optimized for shared hosting without proper server configuration possibilities.

### Requirements
- Composer (https://getcomposer.org/), 
- NPM (https://www.npmjs.com/), 
- Laravel Valet (https://laravel.com/docs/8.x/valet (MACOS) | https://cpriego.github.io/valet-linux/ (LINUX))

### Installation
Run `bash setup` – The walkthrough script will install all dependencies and `valet link` the site, 
if it's not already in a parked directory. It will prompt for the title of the site
and email/password to install the panel. Finally it will create a `.env` file
in the `public` directory and create a local config file with appropriate settings.

It is of course possible to do all this manually.

### Features
The `public` directory is intended to work as a standalone root directory on any live server, while the entire kit can remain under version control. This helps keeping the build clean and drastically improves the speed of file synching, because large directories such as `.git` or `.node_modules` don't have to be parsed or manually excluded.

⚠️ The boilerplate also contains some sensitive PHP scripts, such as `authenticate.php` which authenticates as almighty. It is not recommended to sync anything but the `public` directory to a production environment.

#### Files
- `site/snippets/global/header.php`: contains opening html and body tags and links to default assets
- `site/snippets/global/footer.php`: contains closing html and body tags
- `site/config/config.php`: automatically enables debug mode if an admin user is logged in
- `site/plugins/.gitignore`: allows prefixing custom plugins with (`my-`) to automatically be included in the git repo
- `site/plugins/my-panel/index.js`: a panel login screen showing the page title

#### Plugins
- [Pagetable](https://github.com/sylvainjule/kirby-pagetable)
- [Janitor](https://github.com/bnomei/kirby3-janitor)
- [Dotenv](https://github.com/bnomei/kirby3-dotenv)
- [Panel View Extended](https://github.com/mullema/k3-panel-view-extended)
- [Link Field](https://github.com/OblikStudio/kirby-link-field)
- [Autoresize](https://getkirby.com/plugins/medienbaecker/autoresize)
- [Cachebuster](https://github.com/schnti/kirby3-cachebuster)

### Disclaimer
This template repo is intended for my own use – I won't take responsibility if something doesn't work! :~)

### Other Kirby 3 setups/templates/starterkits/inspiration

- Forge Lite Kirby https://github.com/HashandSalt/ForgeLiteKirby
- Murby https://github.com/FNGR2911/murby
- Anotherkit https://github.com/Diverently/anotherkit
- Kirby Webpack https://github.com/brocessing/kirby-webpack
- Kirby 3 With Public Folder Kit https://github.com/bnomei/kirby3-with-public-folder-kit
- Mix Build Kit https://github.com/floriankarsten/kirby3-mix-build-kit

<hr>


# Kirby

Kirby is a file-based CMS.
Easy to setup. Easy to use. Flexible as hell.

## Trial

You can try Kirby on your local machine or on a test
server as long as you need to make sure it is the right
tool for your next project.

## Buy a license

You can purchase your Kirby license at
<https://getkirby.com/buy>

A Kirby license is valid for a single domain. You can find
Kirby's license agreement here: <https://getkirby.com/license>
