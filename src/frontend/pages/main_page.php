<?php

require_once 'frontend/template/page_generator.php';
require_once 'assets/texts/text_assembly.php';

get_head($header_text);
?>

<!-- Main -->
<?php require_once 'frontend/sections/main_section/index.php'; ?>

<!-- Cases -->
<?php require_once 'frontend/sections/cases_section/index.php'; ?>

<!-- Reviews -->
<?php require_once 'frontend/sections/reviews_section/index.php'; ?>

<!-- Garantee -->
<?php require_once 'frontend/sections/garantee_section/index.php'; ?>

<!-- Contact -->
<?php require_once 'frontend/sections/contacts_section/index.php'; ?>

<!-- Modals -->
<?php require_once 'frontend/modal/privacy/privacy.php' ?>
<?php require_once 'frontend/modal/contact/contact.php' ?>
<?php require_once 'frontend/modal/project/project.php' ?>
<?php require_once 'frontend/modal/result/result.php' ?>

<?php get_footer() ?>