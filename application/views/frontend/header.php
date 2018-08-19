<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url(); ?>theme/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>theme/favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title><?php echo $title ?> | <?php echo $subtitle ?>  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url(); ?>theme/assets/js/require.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <script>
      requirejs.config({
          baseUrl: '<?php echo base_url();?>theme/',

          paths: {
            'jquery': 'https://code.jquery.com/jquery-3.3.1',
            'bootstrap': 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min',
            'datatables': 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min',
            'datatables.bootstrap': 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min',
          },

          shim: {
            'bootstrap': {
              deps: ['jquery']
            },
          },

          map: {
            '*': {
              'datatables.net': 'datatables',
            }
          },
      });
      require(['jquery', 'datatables.bootstrap'], function($) {
        'use strict';
       
        $('#example').dataTable();
      });
    </script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url(); ?>theme/assets/css/dashboard.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>theme/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url(); ?>theme/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>theme/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url(); ?>theme/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>theme/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url(); ?>theme/assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="<?php echo base_url(); ?>theme/index.html">
                <img src="<?php echo base_url(); ?>theme/demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(<?php echo base_url(); ?>theme/demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profil
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Pengaturan
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-help-circle"></i> Butuh Bantuan?
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Keluar
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>