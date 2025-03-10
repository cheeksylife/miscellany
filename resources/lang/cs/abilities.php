<?php

return [
    'abilities'     => [
        'title' => 'Schopnosti, podřazené :name',
    ],
    'children'      => [
        'actions'       => [
            'add'   => 'Přidat schopnost k objektu',
        ],
        'create'        => [
            'success'   => 'Schopnost :name přidána objektu.',
            'title'     => 'Přidat objekt k :name',
        ],
        'description'   => 'Objekty s touto schopností',
        'title'         => 'Objekty se schopností :name',
    ],
    'create'        => [
        'success'   => 'Schopnost :name vytvořena.',
        'title'     => 'Nová schopnost',
    ],
    'destroy'       => [
        'success'   => 'Schopnost :name odstraněna.',
    ],
    'edit'          => [
        'success'   => 'Schopnost :name upravena.',
        'title'     => 'Upravit schopnost :name',
    ],
    'entities'      => [
        'title' => 'Objekty se schopností :name',
    ],
    'fields'        => [
        'abilities' => 'Schopnosti',
        'ability'   => 'Nadřazená schopnost',
        'charges'   => 'Počet použití',
        'name'      => 'Název',
        'type'      => 'Typ',
    ],
    'helpers'       => [
        'descendants'   => 'Seznam všech objektů, které jsou podřazeny tomuto objektu v libovolné hloubce. Nejen těch, které spadají přímo pod tento objekt.',
        'nested'        => 'Vnořené zobrazení ukazuje všechny objekty nezávisle na jejich souvislosti (podřazenost, nadřazenost) s jinými objekty.',
        'nested_parent' => 'Seznam schopností nadřazeného objektu :parent',
        'nested_without'=> 'Seznam všech schopností bez nadřazené schopnosti (jsou na vrcholu stromu schopností). Klepnutím na řádek se zobrazí podřazené schopnosti.',
    ],
    'index'         => [
        'add'           => 'Nová schopnost',
        'description'   => 'Vytvoří dovednosti, kouzla, schopnosti nebo další parametry objektů.',
        'header'        => 'Schopnosti objektu :name',
        'title'         => 'Schopnosti',
    ],
    'placeholders'  => [
        'charges'   => 'Počet použití. Odkaz na atributy pomocí {Úroveň}*{CHA}',
        'name'      => 'Ohnivá koule, Ve střehu, Zákeřný úder',
        'type'      => 'Kouzlo, schopnost, útok',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Schopnosti',
            'entities'  => 'Objekty',
        ],
        'title' => 'Schopnost :name',
    ],
];
