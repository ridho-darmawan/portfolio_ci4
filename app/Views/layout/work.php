<section class="section site-portfolio">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                <h2>Hey, I'm Ridho Darmawan</h2>
                <p class="mb-0">
                    Freelance Web Developer
                </p>
            </div>
            <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">All</a>|

                    <?php foreach ($work as $w) : ?>

                        <a href="#" data-filter="<?= '.' . $w['work_name']; ?>"><?= $w['work_name']; ?></a>|


                    <?php endforeach; ?>


                    <!-- <a href="#" data-filter=".web">Landing Page</a> |
                    <a href="#" data-filter=".design">Sistem Informasi</a>|
                    <a href="#" data-filter=".branding">Website</a> -->
                    <!-- <a href="#" data-filter=".photography">Portfolio</a> -->
                </div>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">


            <?php foreach ($portfolio as $p) : ?>
                <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="work-single.html/<?= $p['id']; ?>" class="item-wrap fancybox">
                        <div class="work-info">
                            <h3><?= $p['title']; ?></h3>
                            <span><?= $p['jenis']; ?></span>
                        </div>
                        <img class="img-fluid" src="assets/img/<?= $p['gambar']; ?>" />
                    </a>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>