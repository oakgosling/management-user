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
              #panel{
                display: none
              }
              .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #eee;
                padding: 5px;               
              }
            </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">ADMIN SIAKAD</a>

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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Add Karyawan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><?php echo $this->load->view('v_regis_akun');?></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pro-logout');?>">Logout</a>
              </li>
            </ul>
          </div>
        </nav>