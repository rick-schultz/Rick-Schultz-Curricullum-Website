<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 <title>Rick Schultz - <?php echo (isset($title) ? $title : 'Curriculum'); ?></title>
 <!-- General CSS Files -->
 <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/app.min.css') ?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/backend/bundles/bootstrap-social/bootstrap-social.css') ?>">
 <!-- Template CSS -->
 <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css') ?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/components.css') ?>">

 <?php if (isset($styles)) : ?>
  <?php foreach ($styles as $style) : ?>
   <link rel="stylesheet" href=<?php echo base_url('assets/backend/' . $style); ?>>
  <?php endforeach; ?>
 <?php endif; ?>

 <!-- Custom style CSS -->
 <link rel=" stylesheet" href="<?php echo base_url('assets/backend/css/custom.css') ?>">
 <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url('assets/frontend/images/favicon.ico') ?>" />
</head>

<body>
 <div class="loader"></div>
 <div id="app">