<section id="casesSection" class="cases_section section-space">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2 data-aos="fade-right"><?= $cases_header ?></h2>
      </div>
    </div>
  </div>

  <?php
  foreach ($cases_data as $key => $value) {
  ?>
    <div class="cases_section__wrapper" data-aos="fade-up">
      <div class="cases_section_background_image__wrapper w-100 h-100">
        <img src="<?= $value->background ?>" alt="<?= $value->title ?>">
      </div>

      <div class="container py-5 h-100">
        <div class="row mb-4 h-100 d-flex align-items-center">
          <div class="col-12 col-md-4 d-flex justify-content-center">
            <img class="preview_image" src="<?= $value->image ?>" alt="<?= $value->title ?>">
          </div>
          <div class="col-12 col-md-8">
            <div class="cases_section_card_title__wrapper d-flex justify-content-center align-items-center">
              <h3><?= $value->title ?></h3>
            </div>
            <div class="cases_section_card_brief__wrapper d-flex">
              <?php
              $briefs = array_reverse($value->briefs);
              if (count($briefs) >= 2) {
                $brief1 = $briefs[0]->value;
                $brief2 = $briefs[1]->value;
                echo "<p class=\"text-cases\">$brief1 / $brief2</p>";
              } else {
                foreach ($briefs as $brief) {
                  echo "<p class=\"text-cases\">{$brief->value}</p>";
                }
              }
              ?>
            </div>
            <div class="cases_section_card_type__wrapper mb-4">
              <p class="caption"><?= $value->description ?></p>
            </div>
            <div class="cases_section_card_properties__wrapper d-flex flex-wrap justify-content-evenly">
              <?php
              $properties = $value->properties;
              $propertiesCount = count($properties);
              $propertiesToShow = array_slice($properties, 0, 6);
              foreach ($propertiesToShow as $property) {
              ?>

                <div class="cases_section_card_property__wrapper d-flex flex-column justify-content-between mb-4 text-center">
                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="cases_section_card_property_image__wrapper mb-2" data-aos="flip-right">
                      <img src="<?= $property->svgLink ?>" alt="<?= $property->title ?>">
                    </div>
                    <div class="cases_section_card_property_title__wrapper">
                      <p class="mb-0"><?= $property->title ?></p>
                    </div>
                  </div>
                  <div class="cases_section_card_property_value__wrapper text-center">
                    <p class="text-cases"><?= $property->value ?></p>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-8">
            <?php
            if ($propertiesCount > 6) {
              $seventhProperty = $properties[6];
            ?>
              <div class="cases_section_card_properties__wrapper justify-content-center justify-content-md-start d-flex w-100">
                <div class="cases_section_card_property__wrapper last d-flex flex-column text-center text-md-start flex-md-row justify-content-center align-items-center gap-4">
                  <div class="cases_section_card_property_image__wrapper">
                    <img src="<?= $seventhProperty->svgLink ?>" alt="<?= $seventhProperty->title ?>">
                  </div>
                  <div class="cases_section_card_seven_property__wrapper d-flex flex-column">
                    <div class="cases_section_card_property_title__wrapper">
                      <p><?= $seventhProperty->title ?></p>
                    </div>
                    <div class="cases_section_card_property_value__wrapper">
                      <p><?= $seventhProperty->value ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center align-items-center" data-aos="fade-up-left">
            <button class="cases_call_modal_button px-5 py-2" project-id="<?= $value->id ?>"><?= $cases_button ?></button>
          </div>
        </div>
      </div>
    </div>

  <?php
  }
  ?>
</section>