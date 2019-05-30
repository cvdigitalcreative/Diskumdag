<div class="container py-2">

    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
        <li class="nav-item" data-option-value="*"><a class="nav-link text-1 text-uppercase" href="#">Tampilkan Semua</a></li>

        <li class="nav-item" data-option-value=".3"><a class="nav-link text-1 text-uppercase" href="#">Bidang Pemberdayaan dan Koperasi</a></li>
        <li class="nav-item" data-option-value=".4"><a class="nav-link text-1 text-uppercase" href="#">Bidang Pemberdayaan Usaha Kecil</a></li>
        <li class="nav-item" data-option-value=".5"><a class="nav-link text-1 text-uppercase" href="#">Bidang Pengawasan dan Pemeriksaan</a></li>
        <li class="nav-item" data-option-value=".6"><a class="nav-link text-1 text-uppercase" href="#">Bidang Perizinan dan Kelembagaan</a></li>
    </ul>


    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
            <?php
            foreach ($info3->result_array() as $i) {
                $gambar = $i['galeri_gambar'];
                $judul = $i['galeri_judul'];

                ?>


                <div class="col-sm-4 col-lg-3 isotope-item 3">
                    <div class="portfolio-item">
                        <a href="">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid border-radius-0" alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner"><?=$judul?></span>

                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <?php 
            }
             ?>

            <?php
            foreach ($info4->result_array() as $i) {
                $gambar = $i['galeri_gambar'];
                $judul = $i['galeri_judul'];
                ?>

                <div class="col-sm-6 col-lg-3 isotope-item 4">
                    <div class="portfolio-item">
                        <a href="">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid border-radius-0" alt="">

                                    <span class="thumb-info-title">
                                    <span class="thumb-info-inner"><?=$judul?></span>

                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <?php
        }
        ?>
            <?php
            foreach ($info5->result_array() as $i) {
                $gambar = $i['galeri_gambar'];
                $judul = $i['galeri_judul'];
                ?>

                <div class="col-sm-6 col-lg-3 isotope-item 5">
                    <div class="portfolio-item">
                        <a href="">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid border-radius-0" alt="">

                                    <span class="thumb-info-title">
                                    <span class="thumb-info-inner"><?=$judul?></span>

                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <?php
        }
        ?>

            <?php
            foreach ($info6->result_array() as $i)  {
                $gambar = $i['galeri_gambar'];
                $judul = $i['galeri_judul'];
                ?>

                <div class="col-sm-6 col-lg-3 isotope-item 6">
                    <div class="portfolio-item">
                        <a href="">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid border-radius-0" alt="">

                                    <span class="thumb-info-title">
                                    <span class="thumb-info-inner"><?=$judul?></span>

                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            <?php
        }
        ?>
        </div>
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>