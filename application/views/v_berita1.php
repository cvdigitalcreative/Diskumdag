<div class="col-xl-12" role="main">



        <div role="main" class="main">
            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">
                                Berita
                            </h1>
                            <span class="sub-title text-dark">Baca berita terbaru!</span>
                        </div>


                    </div>
                </div>
            </section>

            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <div class="blog-posts">
                            <div class="row">
                                
    <?php
    foreach ($info->result_array() as $i) {
        $gambar = $i['tulisan_gambar'];
        $judul = $i['tulisan_judul'];
        $deskripsi = $i['tulisan_isi'];

        ?>

                                <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html"><?= $judul ?></a></h2>
                                            <p><?= limit_words($deskripsi, 23) . '...'; ?></p>

                                            <div class="post-meta">

                                                <span class="d-block mt-2"><a href="<?= base_url() ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                <?php
                            }
                            ?>

                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>





</div>