<?php

$time = microtime(true);

for ($i = 0; $i < 10; ++$i) {
    $bundle = json_decode(file_get_contents(__DIR__.'/json/en.json'), true);

    $currencyNames = array();

    foreach ($bundle['Currencies'] as $code => $data) {
        $currencyNames[$code] = $data[1];
    }

    $bundle = json_decode(file_get_contents(__DIR__.'/json/en_GB.json'), true);

    foreach ($bundle['Currencies'] as $code => $data) {
        $currencyNames[$code] = $data[1];
    }

    $bundle = json_decode(file_get_contents(__DIR__.'/json/root.json'), true);
    $bundle['Alpha3ToNumeric'];
}

echo 'Time: '.((microtime(true) - $time)*1000)."ms\n";
echo 'Memory: '.(memory_get_usage(true)/1024)."kB\n";
echo 'Peak Memory: '.(memory_get_peak_usage(true)/1024)."kB\n";
