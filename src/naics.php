<?php

namespace grayalienventures\naics;

class NAICS {
    public function verbose_label($code) {
        require_once('./naics_codes.php');
        return $naics_codes[$code];
    }
};

$n = new NAICS();
echo $n->verbose_label('62111');