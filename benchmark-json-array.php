<?php

$time = microtime(true);

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

echo 'Nb of Currencies: '.count($currencyNames)."\n";
echo 'Nb of Alpha3-Numeric mappings: '.count($bundle['Alpha3ToNumeric'])."\n";

echo 'Time: '.((microtime(true) - $time)*1000)."ms\n";
echo 'Memory: '.(memory_get_usage(true)/1024)."kB\n";
echo 'Peak Memory: '.(memory_get_peak_usage(true)/1024)."kB\n";
