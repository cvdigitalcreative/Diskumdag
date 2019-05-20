<div class="col-xl-12" role="main">
<?php
        foreach ($info->result_array() as $i) {
            $gambar = $i['galeri_gambar'];
            $judul = $i['galeri_judul'];
            $deskripsi=$i['galeri_deskripsi'];
            ?>

    <div class="col-md-6" style="margin-left:25%;margin-right:25%;margin-top: 20px;">
        <h3 ><?=$judul?></h3>
        <div class="col-md-12">
          <img src="<?=base_url()?>\assets\images\<?=$gambar?>" max-width="100%" style="margin-bottom: 50px;" >
        </div>
        <div class="col-md-12">
<p><?=$deskripsi?></p>
        </div>
        
    </div>
        <?php }?>


</div>