<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'App'; ?></title>

    <!-- CSS utama -->
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css'); ?>">

    <!-- CSS tambahan (dinamis) -->
    <?php if (!empty($css)) : ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/' . $css . '.css'); ?>">
    <?php endif; ?>
</head>
<body>