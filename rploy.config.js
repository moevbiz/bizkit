require('dotenv').config();

module.exports = {
    source: 'public/',
    branches: {
        master: process.env.MASTER,
        dev: process.env.DEV,
    },
    progress: true,
    exclude: [
        ".DS_Store",
        "Icon",
        "node_modules",
        ".git",
        "/site/sessions",
        "/site/cache",
        "/matomo",
        ".awstats",
        "/media",
        "/site/accounts",
        "/site/config/.license",
        "/content",
    ]
}