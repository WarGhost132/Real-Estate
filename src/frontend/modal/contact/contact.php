<!-- Modal -->
<div class="modal fade color-2" id="contactModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content contact_modal__content">
      <div class="modal-header d-flex">
        <div class="modal_logo__wrapper">
          <img src="<?= $contact_modal_logo ?>" alt="mirta">
        </div>
        <p class="mb-0 px-4"><?= $contact_modal_header ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col">
              <hr>
              <p class="modal-text"><?= $contact_modal_content ?></p>
              <hr>
              <div class="modal_button__wrapper d-flex align-items-center justify-content-center gap-4">
                <?php
                foreach ($contact_modal_buttons as $button) {
                ?>

                  <div class="modal_contact_button__wrapper">
                    <div class="modal_contact_button_content__wrapper d-flex flex-column align-items-center justify-content-center">
                      <button class="modal_contact__button d-flex flex-column justify-content-center align-items-center p-2">
                        <img src="<?= $button['img'] ?>" alt="<?= $button['text'] ?>">
                        <p class="modal-text mb-0"><?= $button['text'] ?></p>
                      </button>
                    </div>
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
</div>