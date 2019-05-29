<div>
<div class="container">
   <?php
    foreach ($info->result_array() as $i) {
        $gambar = $i['galeri_gambar'];
        $judul = $i['galeri_judul'];
        ?>


            <div class="row mt-4 mb-6">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <h4 style="margin-top: 50px;"><?= $judul ?></h4>
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" width="100%">
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
