<section class="reviews_section section-space">

  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="reviews_section_title__wrapper">
          <h2 data-aos="fade-right"><?= $review_header ?></h2>
        </div>

      </div>
      <div class="col-12 mb-5">

        <div class="reviews_section_review__wrapper">
          <div class="swiper reviewSwiper">

            <div class="swiper-wrapper review_swiper__wrapper my-5 py-5">
              <?php
              foreach ($review_texts as $review) {
                $image = $review['type'] == 0 ? 'assets/images/comment_2.webp' : 'assets/images/comment_1.webp';
              ?>

                <div class="swiper-slide review_swiper__slide d-flex flex-column align-items-center px-4 py-4">
                  <div class="d-flex flex-column align-items-center w-100">
                    <img src="<?= $image ?>" alt="<?= $review['title'] ?>">
                    <h3><?= $review['title'] ?></h3>
                    <p><?= $review['age'] ?>, <?= $review['city'] ?></p>
                  </div>
                  <p class="text-start"><?= $review['text'] ?></p>
                </div>

              <?php
              }
              ?>
            </div>

            <div class="swiper-pagination review_swiper__pagination d-flex justify-content-center align-items-center"></div>
          </div>
        </div>

      </div>
      <div class="col-12">

        <div class="divider-content mb-3"></div>

        <div class="reviews_section_button__wrapper d-flex">
          <a href="#footerSection" class="link_btn px-5 py-2" data-aos="fade-down-left"><?= $review_ref['button'] ?></a>
        </div>
      </div>
    </div>
  </div>

</section>