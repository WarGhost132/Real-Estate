<footer id="footerSection" class="contacts_section section-space">

  <div class="container">

    <div class="row flex-row-reverse">

      <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 pt-5 mb-5">
        <div class="contact_section_form__wrapper">
          <form id="contactForm" source="ru">

            <div class="row">
              <?php
              foreach (array_slice($contact_form_text, 0, count($contact_form_text) - 2, true) as $key => $value) {
              ?>

                <div class="col-12 col-sm-12 col-md-6 mb-4 d-flex justify-content-center justify-content-md-start">

                  <div class="contact_form_input__wrapper w-100">

                    <label class="white-text" for="<?= $value['id'] ?>"><?= $value['text'] ?>
                      <span class="color-error text-error"><?= $value['is_required'] ? "*": "" ?></span>
                    </label>

                    <div class="contact_form__input white-text">
                      <input class="text-input w-100" type="<?= $value['type'] ?>" name="<?= $value['id'] ?>" id="<?= $value['id'] ?>">
                    </div>
                    <div class="contact_form_error__wrapper">
                      <?php

                      foreach ($value['errors'] as $error_key => $error_value) {
                      ?>
                        <p class="color-error text-error mb-0 d-none caption" id="<?= $value['id'] . '-' . $error_key ?>">
                          <?= $error_value ?>
                        </p>
                      <?php
                      }

                      ?>
                    </div>
                  </div>

                </div>

              <?php
              }
              ?>

              <div class="col-sm-12 contact_form_textarea__col mb-5">
                <?php
                $pre_last_ar_value = array_slice($contact_form_text, count($contact_form_text) - 2, 1, true);
                $value = end($pre_last_ar_value);
                ?>
                <div class="contact_form_input__wrapper contact_form_textarea__wrapper">

                  <label class="white-text" for="<?= $value['id'] ?>"><?= $value['text'] ?></label>

                  <div class="contact_form__input white-text">
                    <textarea type="<?= $value['type'] ?>" name="<?= $value['id'] ?>" id="<?= $value['id'] ?>" maxlength="126" class="w-100"></textarea>
                    <div class="contact_form_textarea__counter"></div>
                  </div>

                  <div class="contact_form_error__wrapper contact_form_error__textarea">
                    <?php
                    foreach ($value['errors'] as $error_key => $error_value) {
                    ?>
                      <p class="color-error text-error mb-0 d-none caption" id="<?= $value['id'] . '-' . $error_key ?>">
                        <?= $error_value ?>
                      </p>
                    <?php
                    }
                    ?>
                  </div>

                </div>
              </div>

              <?php
              $value = end($contact_form_text);
              ?>
              <div class="col-sm-8 contact_form_button__col d-flex mb-sm-0 mb-4">

                <div class="contact_form_checkbox__wrapper w-100 d-flex justify-content-start flex-column">

                  <div class="contact_form_checkbox__container d-flex">
                    <div class="contact_form__checkbox">
                      <input type="<?= $value['type'] ?>" name="<?= $value['id'] ?>" id="<?= $value['id'] ?>">
                    </div>
                    <label class="ms-2 white-text">
                      <a class="contact_open_privacy_policy__button" data-bs-toggle="modal" data-bs-target="#privacyModal">
                        <?= $value['text'] ?>
                        <?php if ($value['is_required']) { ?> <span class="color-error text-error">*</span> <?php } ?>
                      </a>
                    </label>
                  </div>

                  <div class="contact_form_error__wrapper">
                    <?php
                    foreach ($value['errors'] as $error_key => $error_value) {
                    ?>
                      <p class="text-error color-error d-none mb-0 caption" id="<?= $value['id'] . '-' . $error_key ?>">
                        <?= $error_value ?>
                      </p>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="contact_form_button__wrapper d-flex w-100 justify-content-center">
                  <button type="submit" id="contactFormSendButton" class="contact_form__button button-primary mb-2">

                    <span id="contactFormSendText">
                      <?= $contact_section_button_text[0] ?>
                    </span>

                    <span id="contactFormWaitText" class="d-none">
                      <?= $contact_section_button_text[1] ?>
                    </span>

                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="footer__wrapper col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 pt-5 d-lg-block d-flex justify-content-around align-items-start">
        <div class="logo__wrapper d-md-block mb-4 d-flex justify-content-center">
          <img class="main_section_static_logo" src="assets/images/logo.webp" loading="eager" alt="Vital Point">
        </div>

        <ul class="footer_list__ul ps-0">
          <?php
          foreach ($contacts_texts as $index => $contact_value) {
          ?>

            <li class="mb-4">
              <div class="footer_item__wrapper d-flex align-items-center">
                <div class="footer_item_svg__wrapper white-text">
                  <?= $contact_value['svg'] ?>
                </div>
                <div class="footer_item_value__wrapper ms-3">
                  <p class="white-text mb-0"><?= $contact_value['name'] ?></p>
                  <?php
                  if ($contact_value['is_ref']) {
                  ?>
                    <a class="caption white-text" href="<?= $contact_value['ref'] ?>" target="_blank"><?= $contact_value['value'] ?></a>
                  <?php
                  } else {
                  ?>
                    <p class="caption white-text mb-0"><?= $contact_value['value'] ?></p>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </li>

          <?php
          }
          ?>

        </ul>
      </div>
    </div>
  </div>
</footer>