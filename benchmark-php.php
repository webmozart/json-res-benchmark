<?php

$time = microtime(true);

$bundle = include __DIR__.'/php/en.php';

$currencyNames = array();

foreach ($bundle['Currencies'] as $code => $data) {
    $currencyNames[$code] = $data[1];
}

$bundle = include __DIR__.'/php/en_GB.php';

foreach ($bundle['Currencies'] as $code => $data) {
    $currencyNames[$code] = $data[1];
}

$bundle = include __DIR__.'/php/root.php';

echo 'Nb of Currencies: '.count($currencyNames)."\n";
echo 'Nb of Alpha3-Numeric mappings: '.count($bundle['Alpha3ToNumeric'])."\n";

echo 'Time: '.((microtime(true) - $time)*1000)."ms\n";
echo 'Memory: '.(memory_get_usage(true)/1024)."kB\n";
echo 'Peak Memory: '.(memory_get_peak_usage(true)/1024)."kB\n";
