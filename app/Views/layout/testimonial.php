 <!-- ======= Testimonials Section ======= -->
 <section class="section pt-0">
     <div class="container">
         <div class="owl-carousel testimonial-carousel">
             <?php foreach ($testimonial as $t) : ?>
                 <div class="testimonial-wrap">
                     <div class="testimonial">
                         <img src="assets/img/<?= $t['gambar']; ?>" alt="Image" class="img-fluid" />
                         <blockquote>
                             <p>
                                 <?= $t['komentar']; ?>
                             </p>
                         </blockquote>
                         <p>&mdash; <?= $t['name']; ?></p>
                     </div>
                 </div>

             <?php endforeach; ?>


         </div>
     </div>
 </section>
 <!-- End Testimonials Section -->