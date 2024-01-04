<?php

// Funkce pro hodnocení síly hesla
function hodnotit_silu_hesla($heslo) {
    $sila = 0;
    
    // Heslo musí být alespoň 8 znaků dlouhé
    if (strlen($heslo) >= 8) {
        $sila++;
        
        // Heslo by mělo obsahovat alespoň jedno velké písmeno
        if (preg_match('/[A-Z]/', $heslo)) {
            $sila++;
        }
        
        // Heslo by mělo obsahovat alespoň jedno malé písmeno
        if (preg_match('/[a-z]/', $heslo)) {
            $sila++;
        }
        
        // Heslo by mělo obsahovat alespoň jedno číslo
        if (preg_match('/[0-9]/', $heslo)) {
            $sila++;
        }

        // Heslo by mělo obsahovat alespoň dva speciální znaky
        if (preg_match_all('/[!@#$%^&*()_+{}[\]|]/', $heslo) >= 2) {
            $sila++;
        }
    }
    
    return $sila;
}

// Zadání hesla
$zadane_heslo = "12345Ta@!#sdasda";

// Zavolání funkce pro hodnocení hesla
$sila_hesla = hodnotit_silu_hesla($zadane_heslo);

// Definice barev pro jednotlivé úrovně síly hesla
$barvy = array("Červená", "Oranžová", "Zelená", "Modrá", "Fialová");

// Zobrazení výsledku
echo "Síla hesla: " . $barvy[$sila_hesla] . " (Úroveň " . $sila_hesla . ")";

?>