<div role="main" class="main">

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">

            <div class="col-md-12 align-self-center p-static order-2 text-center">

                <h1 class="text-dark font-weight-bold text-8"><?= $title ?></h1>
                <span class="sub-title text-dark">Baca berita terbaru!</span>
            </div>

            <div class="col-md-12 align-self-center order-1">

                <ul class="breadcrumb d-block text-center">
                    <li><a href="#">Berita</a></li>
                    <li class="active"><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4">
    <?php
    foreach ($info->result_array() as $i) {
        $gambar = $i['tulisan_gambar'];
        $judul = $i['tulisan_judul'];
        $deskripsi = $i['tulisan_isi'];
        $slug=$i['tulisan_slug'];
        $tanggal=$i['tulisan_tanggal'];

        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts">

                    <article class="post post-large">
                        <div class="post-image">
                            <a href="blog-post.html">
                                <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>


                        <div class="post-content">

                            <h2 class="font-weight-semibold text-6 line-height-3 mb-3">
                                <a style="    margin-left: -61px;"
                                href=""><?= $judul ?></a>
                            </h2>
                            <div class="post-meta" >
                                <div>
                                    <p style="margin-left: -61px;"><?= $tanggal ?></p>
                                </div>

                            </div>

                            <p style="margin-left: -61px;"><?= $deskripsi ?></p>


                        </div>
                    </article>

                </div>
            </div>



        </div>
    <?php
}
?>