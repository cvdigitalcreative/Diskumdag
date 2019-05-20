<div role="main" class="main">
<?php
        foreach ($info->result_array() as $i) {
            $gambar = $i['galeri_gambar'];
            $judul = $i['galeri_judul'];
            ?>

    <div class="col-md-6" style="margin-left:25%;margin-right:25%;margin-top: 20px;">
        <h3 ><?=$judul?></h3>
        <div class="col-md-12">
          <img src="<?=base_url()?>\assets\images\<?=$gambar?>" width="100%">
        </div>
        
    </div>
        <?php }?>
</div>