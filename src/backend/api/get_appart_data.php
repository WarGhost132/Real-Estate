<?php

require_once __DIR__ . '/../../base_path.php';
require_once BASE_PATH . '/assets/texts/sections/cases_section.php';
require_once BASE_PATH . '/backend/services/CasesRepo.php';


if (isset($_GET)) {

    $repo = new CasesRepo();

    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        echo json_encode($repo->getById($id));
    }
    else {
        echo json_encode($repo->getAll());
    }
}


