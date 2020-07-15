<!-- ======= skill Section ======= -->
<section class="section1" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-5">
                <h3 class="h3 heading">My Skills</h3>
                <p>

                </p>
            </div>
        </div>


        <div class="row" style="margin-bottom: 50px; text-align: center;">
            <?php foreach ($skill as $s) : ?>

                <div class="col-4 col-sm-4 col-md-2">
                    <span class="animasi"><img src="assets/img/<?= $s['gambar']; ?>" alt="Image" class="animasi" /></span>
                    <h4 class="block"><?= $s['name']; ?></h4>
                    <h5 class="h4 mb-2 mt-2 block"><?= $s['class']; ?></h5>
                </div>


            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End skill Section -->