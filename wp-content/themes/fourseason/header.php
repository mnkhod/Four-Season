<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- Tailwind Base CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/prod/css/base.css">
    <?php wp_head(); ?>
</head>
<body>
