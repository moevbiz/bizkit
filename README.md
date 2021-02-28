# 🍪 moevbiz' Kirby CMS boilerplate

### Requirements
- Composer (https://getcomposer.org/), 
- NPM (https://www.npmjs.com/), 
- Laravel Valet (https://laravel.com/docs/8.x/valet (MACOS) | https://cpriego.github.io/valet-linux/ (LINUX))

### Installation
Run `bash setup` – The walkthrough script will install all dependencies and `valet link` the site, 
if it's not already in a parked directory. It will prompt for the title of the site
and email/password to install the panel. Finally it will create a `.env` file
in the `public` directory.

### Info
The production ready Kirby app lives in the `public` directory.

Bizkit is basically a Kirby Plainkit, but includes a very minimal preconfigured file setup and some required plugins.

#### Files
- `site/snippets/header.php`: contains opening html and body tags and links to default assets
- `site/snippets/footer.php`: contains closing html and body tags
- `site/config/config.php`: automatically enables debug mode if an admin user is logged in
- `site/plugins/.gitignore`: allows prefixing custom plugins with (`mb-`) to automatically be included in the git repo
- `site/plugins/mb-panel/index.js`: a panel login screen showing the page title

#### Plugins
- `k3-panel-view-extended`
- `kirby3-dotenv`
- `kirby3-janitor`
- `pagetable`

### Disclaimer
Not really intended for public use. I'll continue upgrading this template repo as I see fit.

### Kirby setups/templates by others:

• Forge Lite Kirby https://github.com/HashandSalt/ForgeLiteKirby
• Murby https://github.com/FNGR2911/murby
• Anotherkit https://github.com/Diverently/anotherkit

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
