<?php

namespace Grayalienventures\Naics;

class NAICS {
    public function verbose_label($code) {
        require_once('./naics_codes.php');
        return $naics_codes[$code];
    }
};