<div class="modal fade" id="resulttModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="resultModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="result_modal__wrapper">
                <div class="row flex-row-reverse">

                    
                    <div class="col-xl-4 col-lg-3 col-12 d-flex justify-content-center align-items-center mb-sm-0 mb-5">
                        <img id="resultImage" class="w-100" src="" alt="">
                    </div>

                    <div class="col-xl-8 col-lg-9 col-12 d-flex justify-content-center align-items-center">
                        <div class="result_modla_left__wrapper d-flex flex-column align-items-center text-center">
                            <h2 id="resultHeader" class="mb-3"></h2>
                            <h3 id="resultSubheader" class="mb-4"></h3>

                            <button class="px-5 py-2" data-bs-dismiss="modal"><?=$result_modal_button?></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div> 