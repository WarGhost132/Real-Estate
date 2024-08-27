<section class="main_section">

  <div class="container main_section_static__container">

    <div class="row h-100">
      <div class="col h-100 d-flex flex-column justify-content-between">
        <div class="main_section_static__wrapper d-flex flex-column justify-content-between ps-md-5 pt-sm-3 pt-4">
          <img class="main_section_static_logo" src="<?= $general_logo_url ?>"></img>

          <div class="main_section_static_header__wrapper white-text d-md-block d-flex justify-content-center">
            <h1 class="mb-5 text-md-start text-center" data-aos="fade-up"><?= $main_static_header ?></h1>
          </div>
        </div>

        <div class="main_section_static_button__wrapper">
          <a href="#casesSection" class="link_btn main_section_static__button white-text" style="z-index: 100;">
            <svg width="43" height="82" viewBox="0 0 43 82" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M42.5 26.2729C42.5 40.1113 33.0229 51.1819 21.5 51.1819C9.97706 51.1819 0.5 40.1113 0.5 26.2729C0.5 12.4344 9.97706 1.36377 21.5 1.36377C33.0229 1.36377 42.5 12.4344 42.5 26.2729Z" stroke="currentColor" />
              <path d="M22 12.5911C22 12.3149 21.7761 12.0911 21.5 12.0911C21.2239 12.0911 21 12.3149 21 12.5911L22 12.5911ZM21.1464 40.3083C21.3417 40.5035 21.6583 40.5035 21.8536 40.3083L25.0355 37.1263C25.2308 36.931 25.2308 36.6144 25.0355 36.4192C24.8403 36.2239 24.5237 36.2239 24.3284 36.4192L21.5 39.2476L18.6716 36.4192C18.4763 36.2239 18.1597 36.2239 17.9645 36.4192C17.7692 36.6144 17.7692 36.931 17.9645 37.1263L21.1464 40.3083ZM21 12.5911L21 39.9547L22 39.9547L22 12.5911L21 12.5911Z" fill="currentColor" />
              <path d="M21.5 51.6819L21.5 81.0001" stroke="currentColor" stroke-linecap="square" />
            </svg>
          </a>
        </div>


      </div>
    </div>

  </div>

  <div class="main_section_swiper__container h-100">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php
      foreach ($main_texts as $index => $data) {
      ?>
        <div class="swiper-slide">
          <div class="main_swiper_slide__wrapper h-100 w-100">
            <img class="main_swiper_bg_image" src="<?= $data['image'] ?>" alt="main background image">



            <div class="container main_swiper_slide_content__container white-text ps-md-5 d-md-block d-flex flex-column align-items-center">
              <div class="divider-main mb-4"></div>
              <h3 class="text-md-start text-center"><?= $data['subheader'] ?></h3>
            </div>

          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev d-md-flex d-none"></div>
    <div class="swiper-button-next d-md-flex d-none"></div>
  </div>

</section>