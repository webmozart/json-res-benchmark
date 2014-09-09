<?php

require __DIR__.'/../vendor/autoload.php';

$time = microtime(true);

$bundle = new \ResourceBundle('en', __DIR__.'/res', true);

$currencyNames = array();

foreach ($bundle->get('Currencies') as $code => $data) {
    $currencyNames[$code] = $data[1];
}

$bundle = new \ResourceBundle('en_GB', __DIR__.'/res', true);

foreach ($bundle->get('Currencies') as $code => $data) {
    $currencyNames[$code] = $data[1];
}

echo 'Nb of Currencies: '.count($currencyNames)."\n";
echo 'Nb of Alpha3-Numeric mappings: '.count($bundle->get('Alpha3ToNumeric'))."\n";

echo 'Time: '.((microtime(true) - $time)*1000)."ms\n";
echo 'Memory: '.(memory_get_usage(true)/1024)."kB\n";
echo 'Peak Memory: '.(memory_get_peak_usage(true)/1024)."kB\n";
