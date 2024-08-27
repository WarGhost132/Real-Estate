<?php

require_once BASE_PATH . '/backend/models/Case.php';
require_once BASE_PATH . '/assets/texts/sections/cases_section.php';


class CasesRepo {
    private array $db;


    public function __construct() {
        global $cases_data;
        $this->db = $cases_data;
    }


    public function getAll(): array {
        return $this->db;
    }

    public function getById(string $id): CaseData | null {
        foreach($this->db as $key => $value) {
            if ($value->id == $id) {
                return $value;
            }
        }
        return null;
    }
}

