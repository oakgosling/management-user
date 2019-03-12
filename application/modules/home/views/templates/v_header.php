<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $judul ?></title>
        <link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <style>
              #btn-users{
                display: none
              }
              html, body{
                max-width: 100%;
                overflow-x: hidden;
              }
              .wrapper{
                padding: 50px;
              }
              .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #eee;
                padding: 5px;               
              }
              .card-footer{
                padding: 0;
              }
              .pagination{
                margin-top: 15px;
                margin-right: 20px;
              }
              .item-drop{
                padding-left: 20px;
              }
              .item-drop a{
                text-decoration: none;
              }
            </style>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="<?= base_url() ?>home">ADMIN SIAKAD</a>

          <!-- button burger -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <!-- end button burger -->
          <!-- nav responsive -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link">
                <?php echo $this->session->userdata('username') ?></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pengaturan
                </a>
                <ul class="dropdown-menu item-drop" aria-labelledby="navbarDropdown">
                  <li><a href="<?= base_url() ?>level">List Level</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="<?= base_url() ?>url">List Url</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="<?= base_url() ?>privilege">List Privilege</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="<?= base_url() ?>hak_akses">Hak Akses</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pro-logout');?>">Logout</a>
              </li>
            </ul>
          </div>
        </nav><br><br><br>