<section class="section">
    <div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6" data-aos="fade-up">
                <h2>My Services</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam necessitatibus incidunt ut officiis explicabo
                    inventore.
                </p>
            </div>
        </div>
    </div>

    <div class="site-section pb-0">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="card-deck">
                    <?php foreach ($service as $s) : ?>
                        <div class="card">
                            <img src="assets/img/<?= $s['gambar']; ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title"><?= $s['title']; ?></h5>
                                <p class="card-text">
                                    <?= $s['text']; ?>
                                </p>

                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
    </div>
</section>