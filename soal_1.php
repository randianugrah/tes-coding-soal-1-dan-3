<?php
function deretAngka($urutan) {
    $hasil = '';
    $angka = 1;
    $temp = [];

    for ($i = 0; $i <= strlen($urutan); $i++) {
        $temp[] = $angka++;
        
        if ($i == strlen($urutan) || $urutan[$i] == 'N') {
            while (!empty($temp)) {
                $hasil .= array_pop($temp);
            }
        }
    }

    return $hasil;
}

// Contoh:
echo deretAngka("M") . "\n";        // Output: 21
echo deretAngka("N") . "\n";        // Output: 12
echo deretAngka("MM") . "\n";       // Output: 321
echo deretAngka("NN") . "\n";       // Output: 123
echo deretAngka("MNMN") . "\n";     // Output: 21435
echo deretAngka("NNMMM") . "\n";    // Output: 126543
echo deretAngka("MMNMMNNM") . "\n"; // Output: 321654798
echo deretAngka("MNM") . "\n"; // Output: 321654798