<?php

return [
    'create'        => [
        'description'   => 'Создание нового события',
        'success'       => 'Событие ":name" создано.',
        'title'         => 'Новое событие',
    ],
    'destroy'       => [
        'success'   => 'Событие ":name" удалено.',
    ],
    'edit'          => [
        'success'   => 'Событие ":name" обновлено.',
        'title'     => 'Редактирование события :name',
    ],
    'events'        => [
        'helper'    => 'Здесь показаны события, родительским событием которых является это событие.',
        'title'     => 'События события :name',
    ],
    'fields'        => [
        'date'      => 'Дата',
        'event'     => 'Родительское событие',
        'events'    => 'События',
        'image'     => 'Изображение',
        'location'  => 'Локация',
        'name'      => 'Название',
        'type'      => 'Тип',
    ],
    'helpers'       => [
        'date'          => 'В это поле можно написать что угодно. Оно не связано с календарями кампании. Чтобы связать событие с календарем, добавьте его в календарь во вкладке напоминаний этого события или на странице календаря.',
        'nested_parent' => 'Показаны события, входящие в :parent.',
        'nested_without'=> 'Показаны все события, у которых нет родительских событий. Нажмите на строку события, чтобы увидеть список его событий-потомков.',
    ],
    'index'         => [
        'add'           => 'Новое событие',
        'description'   => 'Управление событиями :name',
        'header'        => 'События :name',
        'title'         => 'События',
    ],
    'placeholders'  => [
        'date'      => 'Дата вашего события',
        'location'  => 'Выберите локацию',
        'name'      => 'Название события',
        'type'      => 'Церемония, фестиваль, катастрофа, битва, рождение',
    ],
    'show'          => [
        'description'   => 'Детальный вид события',
        'tabs'          => [
            'events'    => 'События',
        ],
        'title'         => 'Событие :name',
    ],
    'tabs'          => [
        'calendars' => 'Записи календарей',
    ],
];
