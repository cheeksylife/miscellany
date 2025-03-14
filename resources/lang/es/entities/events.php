<?php

return [
    'fields'    => [
        'type'  => 'Tipo de evento',
    ],
    'helpers'   => [
        'characters'    => 'Al seleccionar fecha de nacimiento o de fallecimiento, se calculará automáticamente la edad de este personaje. :more',
    ],
    'show'      => [
        'actions'   => [
            'add'   => 'Añadir recordatorio',
        ],
        'title'     => 'Recordatorios de :name',
    ],
    'types'     => [
        'birth'     => 'Nacimiento',
        'death'     => 'Muerte',
        'primary'   => 'Primario',
    ],
];
