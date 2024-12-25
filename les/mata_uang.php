<?php
// Daftar lembaran mata uang Indonesia
$uang = ["1000", "2000", "5000", "10000", "20000", "50000", "100000"];

function cetakDenganSequence($uang) {
    echo "\nCetak dengan Sequence Biasa:\n";
    echo implode(", ", $uang) . "\n";
}

function cetakDenganPerulangan($uang) {
    echo "\nCetak dengan Perulangan:\n";
    foreach ($uang as $lembar) {
        echo $lembar . "\n";
    }
}

function hitungLembaranKondisi($nominal)
{
    /**
     * pembagian dan modulus
     * 
     * 176000 / 100000 = 1.7
     *
     * 176000 % 100000 = 76000
     *         1________
     * 100000 / 176000
     *          100000
     *          ------ -
     *           76000
     */
    
     echo "\nHitung Jumlah Lembaran untuk Nominal: Rp{$nominal} dengan kondisi\n";
    $pecahan = 100000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 50000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 20000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 10000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 5000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 2000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }
    $pecahan = 1000;
    if ($nominal / $pecahan > 0) {
        $jumlah = (int) ($nominal / $pecahan);
        // $jumlah = intdiv($nominal, $pecahan);
        echo "$jumlah x $pecahan" . PHP_EOL;

        // $nominal = $nominal - ($jumlah * $pecahan);
        $nominal = $nominal % $pecahan;
    }

}

function hitungLembaran($nominal, $uang) {
    echo "\nHitung Jumlah Lembaran untuk Nominal: Rp{$nominal}\n";
    $result = [];
    foreach (array_reverse($uang) as $lembar) {
        $lembar = (int)$lembar; // Konversi ke integer
        $jumlah = intdiv($nominal, $lembar);
        if ($jumlah > 0) {
            $result[$lembar] = $jumlah;
            $nominal %= $lembar; // Sisa nominal
        }
    }

    if ($nominal > 0) {
        echo "Nominal tidak dapat dibagi dengan lembaran yang tersedia. Sisa: Rp{$nominal}\n";
    }

    foreach ($result as $lembar => $jumlah) {
        echo "Rp{$lembar} x {$jumlah}\n";
    }
}

// Pemanggilan Fungsi
cetakDenganSequence($uang);
cetakDenganPerulangan($uang);

// Contoh penggunaan hitungLembaran
$nominal = 388000;
hitungLembaran($nominal, $uang);

hitungLembaranKondisi($nominal);
?>
