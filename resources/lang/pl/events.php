<?php

return [
    'create'        => [
        'description'   => 'Stwórz nowe wydarzenie',
        'success'       => 'Stworzono wydarzenie \':name\'.',
        'title'         => 'Nowe wydarzenie',
    ],
    'destroy'       => [
        'success'   => 'Usunięto wydarzenie \':name\'.',
    ],
    'edit'          => [
        'success'   => 'Zmieniono wydarzenie \':name\'.',
        'title'     => 'Edycja wydarzenia :name',
    ],
    'events'        => [
        'helper'    => 'Ty wyświetlone są wydarzenia pochodzące od tego elementu.',
        'title'     => 'Wydarzenia wydarzenia :name',
    ],
    'fields'        => [
        'date'      => 'Data',
        'event'     => 'Wydarzenie źródłowe',
        'events'    => 'Wydarzenia pochodne',
        'image'     => 'Obraz',
        'location'  => 'Miejsce',
        'name'      => 'Nazwa',
        'type'      => 'Rodzaj',
    ],
    'helpers'       => [
        'date'          => 'W tym polu można umieścić wszystko - nie jest związane z kalendarzami kampanii. By umieścić je w kalendarzu, dodaj je ręcznie w menu kalendarza albo zakładce "Ważne daty" wydarzenia.',
        'nested'        => 'W widoku hierarchii najpierw wyświetlane są wydarzenia, które nie mają źródła. Po kliknięciu na wiersz wydarzenia zobaczysz jego pochodne. Możesz schodzić niżej, póki nie skończą się poziomy hierarchii.',
        'nested_parent' => 'Wyświetlono wydarzenia pochodzące od :parent.',
        'nested_without'=> 'Wyświetlono wszystkie wydarzenia nie posiadające źródła. Kliknij na rząd, by wyświetlić wydarzenia pochodne.',
    ],
    'index'         => [
        'add'           => 'Nowe wydarzenie',
        'description'   => 'Zarządzaj wydarzeniami elementu :name.',
        'header'        => 'Wydarzenia elementu :name',
        'title'         => 'Wydarzenia',
    ],
    'placeholders'  => [
        'date'      => 'Data tego wydarzenia',
        'location'  => 'Wybierz miejsce',
        'name'      => 'Nazwa wydarzenia',
        'type'      => 'Uroczystość, festiwal, katastrofa, bitwa, narodziny',
    ],
    'show'          => [
        'description'   => 'Szczegółowy opis wydarzenia',
        'tabs'          => [
            'events'        => 'Wydarzenia',
            'information'   => 'Informacje',
        ],
        'title'         => 'Wydarzenie :name',
    ],
    'tabs'          => [
        'calendars' => 'Wpisy w kalendarzu',
    ],
];
