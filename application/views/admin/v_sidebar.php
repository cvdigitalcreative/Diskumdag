<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar -->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="<?php echo base_url()?>Admin/Dashboard"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span> </a>
        </li>
        <!-- menu title -->
         <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Website Components </li>
        <!-- All Form  -->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Posting</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="Form" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Kategori">Kategori Posting</a> </li>
           <!--  <li> <a href="<?php echo base_url()?>Admin/Tulisan/add_tulisan">Form Add Tulisan</a> </li> -->
            <li> <a href="<?php echo base_url()?>Admin/Tulisan">List Posting</a> </li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#tentang">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Tentang</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="tentang" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Kategori_tentang">Kategori Tentang</a></li>
            <li> <a href="<?php echo base_url()?>Admin/Tentang">List Tentang</a> </li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#Pengumuman">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Pengumuman</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="Pengumuman" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Pengumuman">List Pengumuman</a> </li>
           <!--  <li> <a href="<?php echo base_url()?>Admin/Tulisan/add_tulisan">Form Add Tulisan</a> </li> -->
            <li> <a href="<?php echo base_url()?>Admin/Album_pengumuman/">Album Pengumuman</a> </li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#galeri-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Galeri</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="galeri-menu" class="collapse" data-parent="#sidebarnav">
             <li> <a href="<?php echo base_url()?>Admin/Album">Kategori Galeri</a> </li>
            <li> <a href="<?php echo base_url()?>Admin/Galeri">List Galeri</a> </li>
          </ul>
        </li>
         <!-- menu item mailbox-->
        <li>
          <a href="<?php echo base_url()?>Admin/Inbox"><i class="ti-email"></i><span class="right-nav-text">Mail box</span> </a>
        </li>
      
    </ul>
  </div> 
</div>
<!-- Left Sidebar End-->