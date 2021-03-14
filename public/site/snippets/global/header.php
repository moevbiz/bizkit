<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22><?= option('favicon') !== null ? option('favicon') : '🍪'; ?></text></svg>">
    <title><?= $site->title(); ?></title>

    <?= css([
        'assets/dist/css/style.css',
        ]); ?>
        
    <?= js([
        'assets/dist/js/scripts.js',
        ]); ?>
</head>
<body>