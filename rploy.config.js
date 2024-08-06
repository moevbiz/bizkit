require('dotenv').config();

module.exports = {
    source: '/public',
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
        "/site/config/.license",
        // comment these two out before initial launch
        "/site/accounts",
        "/content",
    ]
}