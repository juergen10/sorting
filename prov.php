<?php

$provinces = [
'West Java' => 'Indonesia',
'East Java' => 'Indonesia',
'South Kalimantan' => 'Indonesia',
'Tasmania' => 'Australia',
'Victoria' => 'Australia',
];
$cities = [
'Bogor' => 'West Java',
'Bandung' => 'West Java',
'Bekasi' => 'West Java',

'Gresik' => 'East Java',
'Jember' => 'East Java',
'Madiun' => 'East Java',
'Malang' => 'East Java',

'Banjar' => 'South Kalimantan',
'Barito' => 'South Kalimantan',

'Kingston' => 'Tasmania',
'Queenstown' => 'Tasmania',
'Melbourne' => 'Victoria',
'Ballarat' => 'Victoria',
];

function FunctionName($provinces, $cities)
{
    $object = [];

    foreach ($provinces as $key => $sort) {
        foreach ($cities as $city => $value) {
            if ($key === $value) {
                if (!isset($object[$sort])) {
                    $object[$sort] = array();
                    if (!isset($object[$sort][$value])) {
                        $object[$sort][$value] = array();
                    }
                }
                $object[$sort][$value][] = $city;
            }
        }
    }
    echo json_encode($object);
}
print_r(FunctionName($provinces, $cities));
 ?>
