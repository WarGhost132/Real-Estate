<section class="garantee_section section-space">

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="garantee_section_title__wrapper">
          <h2 data-aos="fade-down-right"><?= $garantee_header ?></h2>
        </div>
      </div>
      <div class="col-12">

        <?php
        foreach ($garantee_list as $key => $value) {
        ?>

          <div class="garantee_block__wrapper d-flex align-items-center w-100 mb-4">
            <div class="garantee_info__wrapper pe-2 d-flex flex-column justify-content-center" data-aos="fade-right">
              <h3 class="py-2"><?= $value['title'] ?></h3>
              <p><?= $value['text'] ?></p>
            </div>
            <div class="garantee_image__wrapper d-flex align-items-end" data-aos="fade-left">
              <img src="<?= $value['image'] ?>" alt="<?= $value['title'] ?>">
            </div>
          </div>

        <?php
        }
        ?>
      </div>
      <div class="col-12">
        <div class="divider-content mb-3"></div>

        <div class="garantee_section_lead__wrapper d-flex flex-wrap justify-content-center align-items-start justify-content-lg-end gap-4">
          <div class="garantee_section_text__wrapper text-center text-lg-end">
            <p data-aos="fade-right"><?= $garantee_ref['text'] ?></p>
          </div>
          <div class="garantee_section_button__wrapper d-flex">
            <a href="#footerSection" class="link_btn px-5 py-2" data-aos="fade-up-left"><?= $garantee_ref['button'] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>