<?php

return [
    'actions'       => [
        'add'   => 'Új csoport hozzáadása',
    ],
    'create'        => [
        'success'   => ':name csoportot létrehoztuk.',
        'title'     => 'Új Csoport',
    ],
    'delete'        => [
        'success'   => ':name csoport törölve lett!',
    ],
    'edit'          => [
        'success'   => ':name csoport frissült!',
        'title'     => ':name csoport szerkesztése.',
    ],
    'fields'        => [
        'is_shown'  => 'Csoportjelölők mutatása',
        'position'  => 'Elhelyezkedés',
    ],
    'helper'        => [
        'amount'            => 'Egy térképjelzőt hozzá lehet rendelni egy csoporthoz, amellyel elrejtheted, vagy megjelenítheted az összes boltot egy városban egy kattintással. Egy térkép legfeljebb :amount db csoporttal rendelkezhet.',
        'boosted_campaign'  => ':boosted pedig :amount csoporttal is rendelkezhet térképenként.',
    ],
    'hints'         => [
        'is_shown'  => 'Ha bejelölöd, alapértelmezetten mutatja a csoportjelölőket a térképen.',
    ],
    'placeholders'  => [
        'name'      => 'Boltok, Kincsek, mellékszereplők.',
        'position'  => 'Egy opcionális mező, ahol beállíthatod, hogy a csoportok milyen sorrendben jelenjenek meg.',
    ],
];
