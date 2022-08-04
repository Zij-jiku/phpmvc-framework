<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo assets('backend'); ?>/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo assets('backend'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo assets('backend'); ?>/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo assets('backend'); ?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo assets('backend'); ?>/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo assets('backend'); ?>/js/modernizr.min.js"></script>
</head>


<body>
    <!-- Begin page -->
    <div id="wrapper">

        <?php require_once  'views/layouts/backend/leftSideMenu.php'; ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <?php require_once  'views/layouts/backend/topBar.php'; ?>