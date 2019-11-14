
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Dinas UKM dan Koperasi Palembang" />
<meta name="description" content="Dinas UKM dan Koperasi Palembang" />
<meta name="author" content="diskopukm.sumselprov.go.id" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Dinas UKM dan Koperasi Palembang</title>



<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/admin/images/favicon.ico">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/jquery.toast.min.css">
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<!-- <div id="pre-loader">
    <img src="<?php echo base_url()?>assets/admin/images/pre-loader/loader-01.svg" alt="">
</div> -->

<!--=================================
 preloader -->


<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="dashboard.html"><img src="<?php echo base_url()?>assets/admin/images/logo-dark.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="dashboard.html"><img src="<?php echo base_url()?>assets/admin/images/logo-icon-dark.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown ">
      <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="ti-bell"></i>
        <span class="badge badge-danger notification-status"> </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
        <div class="dropdown-header notifications">
          <strong>Notifications</strong>
          <span class="badge badge-pill badge-warning"><?php echo $jum_pesan;?></span>
        </div>
        <div class="dropdown-divider"></div>
        <?php 
                    $inbox=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox WHERE inbox_status='1' ORDER BY inbox_id DESC LIMIT 5");
                    foreach ($inbox->result_array() as $in) :
                        $inbox_id=$in['inbox_id'];
                        $inbox_nama=$in['inbox_nama'];
                        $inbox_tgl=$in['tanggal'];
                        $inbox_pesan=$in['inbox_pesan'];
        ?>
        <a href="<?php echo base_url()?>Admin/Inbox" class="dropdown-item"><?php echo $inbox_pesan;?> <small class="float-right text-muted time"><?php echo $inbox_tgl;?></small> </a>
        <?php endforeach;?>
      </div>
    </li>
    <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url().'assets/admin/images/'.$c['pengguna_photo'];?>" alt="avatar">
      </a>
      
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0"><?php echo $c['pengguna_nama'];?></h5>
              <span><?php echo $c['pengguna_email'];?></span>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url().'Administrator/logout'?>"><i class="text-danger ti-unlock"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->