<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title(); ?></title>

    <?= css([
        'assets/dist/css/bundle.css',
        ]); ?>
        
    <?= js([
        'assets/dist/js/bundle.js',
        ]); ?>
</head>
<body>