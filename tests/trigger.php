<?php

require __DIR__.'/../vendor/autoload.php';

class Crab
{

    protected $crabs = ['here'];

    public function __construct()
    {
        $crabs = ['red_crab','green_crab'];
    }
}

$crabs = new Crab();

$test_value = [
    'this',
    'that',
    'value' => [
      'nested'
    ],
    $crabs,
    'stuff'
];

dd($test_value);
