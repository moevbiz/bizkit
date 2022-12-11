# Bizkit: a Kirby CMS starter-kit

This is a template repository for Kirby CMS websites, featuring opinionated configuration, some plugin dependencies, and a setup script for quick installation. Intended to be optimized for run-of-the-mill shared apache hosting without desire or possibility for deep server configuration.

> ### Disclaimer
> Please feel free to use this as a template or grab inspiration for your own projects. This boilerplate is intended for my personal use and I won't take responsibility if something doesn't work! :~) 🍪 

### Requirements
- [Composer](https://getcomposer.org/)
- [npm](https://www.npmjs.com/)
- [Laravel Valet](https://laravel.com/docs/8.x/valet) or [Valet Linux](https://cpriego.github.io/valet-linux/)

### Installation
1. [Create a new repository from this template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template#creating-a-repository-from-a-template)
2. Donwload or clone your repository and navigate to the directory
3. run `bash setup`

The walkthrough script will (1) install all `Composer` and `npm` dependencies, (2) `valet link` the site if it's not already in a parked directory, (3) prompt for the title of the site and an email/password combination to install the panel, (4) create a `.env` file in the `public` directory and create a local config file with appropriate settings. It is of course possible to do all this manually.

### Usage
`npm run dev` to start local dev server with hot reload. `npm run deploy` to bundle assets and deploy to server using [rploy](https://github.com/jongacnik/rploy). `npm run push` to lazily push everything to GitHub (Consider writing helpful commit messages instead). 

### Features

#### Main features
- **Automated `setup` script** to get started from the CLI without much configuration
- **`public` directory** – This is intended to work as the root directory on any live server, while the entire kit can remain under version control. This helps keeping the build clean and may improve the speed of file synching, especially using (S)FTP, because source directories such as `.git` or `.node_modules` don't have to be parsed or manually excluded. It also means composer dependencies such as Kirby Plugins need to be required from within the `public` directory.
- ⚠️ The template also contains **sensitive PHP scripts**, such as `authenticate.php` which authenticates as almighty. It is not recommended to sync anything but the `public` directory to a production environment.

#### Development tools
- [SASS](https://sass-lang.com)
- [Laravel Mix](https://laravel-mix.com) with BrowserSync enabled and configured
- [rploy](https://github.com/jongacnik/rploy) and Kirby-Specific configuration for rapid file transfer

#### Kirby Plugins
- [Dotenv](https://github.com/bnomei/kirby3-dotenv)
- [Link Field](https://github.com/OblikStudio/kirby-link-field)
- [Autoresize](https://getkirby.com/plugins/medienbaecker/autoresize)
- [Cachebuster](https://github.com/schnti/kirby3-cachebuster)
- [Kirby Ray](https://github.com/genxbe/kirby3-ray)

#### Opinionated files and small conveniences
- `site/snippets/global/header.php`: contains opening html and body tags and links to default assets, and an Emoji favicon
- `site/snippets/global/footer.php`: contains closing html and body tags
- `site/config/config.php`: automatically enables debug mode if an admin user is logged in
- `site/config/routes.php`: if a `prelaunch` option is set, the site will be hidden for the public and all requests are redirected to the login screen
- `site/plugins/.gitignore`: allows prefixing custom plugins with "`my-`" to automatically be included in the git repo

<hr>

### Other Kirby 3 setups/templates/starterkits/boilerplates
(...that i may or may not have taken inspiration from)

- Forge Lite Kirby https://github.com/HashandSalt/ForgeLiteKirby
- Murby https://github.com/FNGR2911/murby
- Anotherkit https://github.com/Diverently/anotherkit
- Kirby Webpack https://github.com/brocessing/kirby-webpack
- Kirby 3 With Public Folder Kit https://github.com/bnomei/kirby3-with-public-folder-kit
- Mix Build Kit https://github.com/floriankarsten/kirby3-mix-build-kit
- Kirby Plainkit Cookiecutter https://github.com/beste/kirby-plainkit/
- k3 Projectkit https://github.com/rasteiner/k3-projectkit
- Coralic Kirby Plainkit https://github.com/coralic/kirby-plainkit
- KAT Kit https://github.com/whiterussianstudio/kat-kit

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
