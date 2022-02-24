<?php
$nem = [
    [
        'id' => 'neme',
        'type' => 'select',
        'values' => [
            ['N', 'Nő'],
            ['F', 'Férfi']
        ]
    ],
    [
        'id' => 'nev',
        'type' => 'text',
        'values' => []
    ],
    [
        'id' => 'kor',
        'type' => 'number',
        'values' => []
    ],
    [
        'id' => 'elküld',
        'type' => 'submit',
        'values' => ['Elküld']
    ],
];

function adatlap_keszit($items, $active = null) {
    echo '<form name="adatok" method="POST">';
    foreach ($items as $key => $value) {
    }
}

?>