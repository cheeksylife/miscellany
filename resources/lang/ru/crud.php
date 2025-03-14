<?php

return [
    'actions'                   => [
        'actions'           => 'Действия',
        'apply'             => 'Применить',
        'back'              => 'Назад',
        'bulk_templates'    => 'Шаблон атрибутов',
        'copy'              => 'Копировать',
        'copy_mention'      => 'Копировать [упоминание]',
        'copy_to_campaign'  => 'Копировать в кампанию',
        'explore_view'      => 'Свернутый вид',
        'export'            => 'Экспортировать (PDF)',
        'find_out_more'     => 'Узнать больше',
        'go_to'             => 'Перейти к :name',
        'json-export'       => 'Экспортировать (JSON)',
        'manage_links'      => 'Настроить ссылки',
        'move'              => 'Изменить или переместить',
        'new'               => 'Создать',
        'new_post'          => 'Новый пост',
        'next'              => 'Далее',
        'print'             => 'Распечатать',
        'reset'             => 'Сброс',
        'transform'         => 'Трансформировать',
    ],
    'add'                       => 'Добавить',
    'alerts'                    => [
        'copy_attribute'    => 'Упоминание атрибута скопировано в буфер обмена.',
        'copy_mention'      => 'Продвинутое упоминание объекта скопировано в буфер обмена.',
    ],
    'boosted'                   => 'Усилена',
    'boosted_campaigns'         => 'Усиленные кампании',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Групповой редактор и тэги',
        ],
        'age'           => [
            'helper'    => 'Перед числом можно поставить + или - , чтобы увеличить или уменьшить возраст на это число.',
        ],
        'delete'        => [
            'title'     => 'Удаление нескольких объектов',
            'warning'   => 'Вы уверены, что хотите удалить выбранные объекты?',
        ],
        'edit'          => [
            'tagging'   => 'Действие с тэгами',
            'tags'      => [
                'add'       => 'Добавить',
                'remove'    => 'Удалить',
            ],
            'title'     => 'Редактирование нескольких объектов',
        ],
        'errors'        => [
            'admin'     => 'Скрывать и открывать объекты могут только админы кампании.',
            'general'   => 'При обработке вашего действия произошла ошибка. Пожалуйста, попробуйте снова и свяжитесь с нами, если проблема сохранится. Сообщение ошибки: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Перезапись',
            ],
            'helpers'   => [
                'override'  => 'Разрешения выбранных объектов будут перезаписаны. Если не включать, то выбранные разрешения будут добавлены к уже существующим.',
            ],
            'title'     => 'Изменение разрешений нескольких объектов',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} В кампанию :campaign скопирован :count объект.|[2,4] В кампанию :campaign скопировано :count объекта.|[5,*] В кампанию :campaign скопировано :count объектов.',
            'editing'           => '{1} Обновлен :count объект.|[2,4] Обновлено :count объекта.|[5,*] Обновлено :count объектов.',
            'editing_partial'   => '{1} Обновлен :count из :total объектов.|[2,*] Обновлено :count из :total объектов.',
            'permissions'       => '{1} Изменены разрешения :count объекта.|[2,*] Изменены разрешения :count объектов.',
            'private'           => '{1} Скрыт :count объект.|[2,4] Скрыто :count объекта.|[5,*] Скрыто :count объектов.',
            'public'            => '{1} Открыт :count объект.|[2,4] Открыто :count объекта.|[5,*] Открыто :count объектов.',
            'templates'         => '{1} Шаблон применен к :count объекту.|[2,*] Шаблон применен к :count объектам.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Применение шаблона к нескольким объектам',
    ],
    'cancel'                    => 'Отмена',
    'click_modal'               => [
        'close'     => 'Закрыть',
        'confirm'   => 'Подтвердить',
        'title'     => 'Подтверждение вашего действия',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Копирование объектов в другую кампанию',
        'panel'         => 'Копировать',
        'title'         => 'Копирование :name в другую кампанию',
    ],
    'create'                    => 'Создать',
    'datagrid'                  => [
        'empty' => 'Здесь пока ничего нет.',
    ],
    'delete_modal'              => [
        'close'             => 'Закрыть',
        'delete'            => 'Удалить',
        'description'       => 'Вы уверены, что хотите удалить :tag?',
        'description_final' => 'Вы уверены, что хотите удалить :tag? Это действие необратимо.',
        'mirrored'          => 'Удалить зеркальную связь',
        'title'             => 'Подтверждение удаления',
    ],
    'destroy_many'              => [
        'success'   => '{1} Удален :count объект.|[2,4] Удалено :count объекта.|[5,*] Удалено :count объектов.',
    ],
    'edit'                      => 'Редактировать',
    'errors'                    => [
        'boosted'                       => 'Этой функцией обладают только усиленные кампании.',
        'boosted_campaigns'             => 'Этой функцией обладают только :boosted.',
        'node_must_not_be_a_descendant' => 'Недопустимая привязка (тэг, родительская локация): объект является потомком самого себя.',
        'unavailable_feature'           => 'Функция недоступна.',
    ],
    'events'                    => [
        'hint'  => 'Список ниже содержит все календари, в которые было добавлено это событие.',
    ],
    'export'                    => 'Экспортировать',
    'fields'                    => [
        'ability'               => 'Способность',
        'attribute_template'    => 'Шаблон атрибутов',
        'calendar'              => 'Календарь',
        'calendar_date'         => 'Дата календаря',
        'character'             => 'Персонаж',
        'child'                 => 'Потомок',
        'closed'                => 'Закрыт',
        'colour'                => 'Цвет',
        'copy_abilities'        => 'Копировать способности',
        'copy_attributes'       => 'Копировать атрибуты',
        'copy_inventory'        => 'Копировать инвентарь',
        'copy_links'            => 'Копировать ссылки объекта',
        'copy_notes'            => 'Копировать заметки объекта',
        'creator'               => 'Создатель',
        'dice_roll'             => 'Бросок костей',
        'entity'                => 'Объект',
        'entity_type'           => 'Тип объекта',
        'entry'                 => 'Статья',
        'event'                 => 'Событие',
        'excerpt'               => 'Краткое описание',
        'family'                => 'Семья',
        'files'                 => 'Файлы',
        'gallery_header'        => 'Заголовок из галереи',
        'gallery_image'         => 'Изображение из галереи',
        'has_entity_files'      => 'Есть загруженные файлы',
        'has_entity_notes'      => 'Есть заметки объекта',
        'has_image'             => 'Есть изображение',
        'header_image'          => 'Изображение заголовка',
        'image'                 => 'Изображение',
        'is_closed'             => 'Разговор будет закрыт и перестанет принимать новые сообщения.',
        'is_private'            => 'Скрытый',
        'is_private_v2'         => 'Показывать это только участникам кампании с :admin-role независимо от разрешений.',
        'is_star'               => 'Закрепить',
        'item'                  => 'Предмет',
        'journal'               => 'Журнал',
        'location'              => 'Локация',
        'locations'             => ':first в :second',
        'map'                   => 'Карта',
        'name'                  => 'Название',
        'organisation'          => 'Организация',
        'position'              => 'Позиция',
        'privacy'               => 'Доступ',
        'race'                  => 'Раса',
        'tag'                   => 'Тэг',
        'tags'                  => 'Тэги',
        'timeline'              => 'Хронология',
        'tooltip'               => 'Подсказка',
        'type'                  => 'Тип',
        'visibility'            => 'Доступ',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Нажмите здесь или перетащите сюда файлы.',
            'manage'    => 'Управление файлами объекта',
        ],
        'errors'    => [
            'max'       => 'Вы достигли максимального количества файлов (:max) для этого объекта.',
            'no_files'  => 'Нет файлов.',
        ],
        'files'     => 'Загруженные файлы',
        'hints'     => [
            'limit'         => 'Каждому объекту можно загрузить не больше :max файлов.',
            'limitations'   => 'Форматы: :formats. Размер файла: до :size.',
        ],
        'title'     => 'Файлы объекта :name',
    ],
    'filter'                    => 'Фильтровать',
    'filters'                   => [
        'all'                       => 'Фильтр всех потомков',
        'clear'                     => 'Убрать фильтры',
        'copy_helper'               => 'Используйте скопированные фильтры из буфера обмена в качестве значений для фильтров виджетов обзоров и быстрых ссылок.',
        'copy_helper_no_filters'    => 'Настройте фильтры, прежде чем копировать их в буфер обмена.',
        'copy_to_clipboard'         => 'Копировать фильтры',
        'direct'                    => 'Фильтр непосредственных потомков',
        'filtered'                  => 'Показано :count из :total объектов типа :entity.',
        'hide'                      => 'Скрыть фильтры',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Показать всех членов (:count)',
                'filtered'  => 'Показать непосредственных членов (:count)',
            ],
            'mobile'    => [
                'all'       => 'Показать всех (:count)',
                'filtered'  => 'Показать непосредственных (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Убрать',
            'copy'  => 'Копировать',
        ],
        'options'                   => [
            'exclude'   => 'Отсутствует',
            'include'   => 'Присутствует',
            'none'      => 'Не важно',
        ],
        'show'                      => 'Показать фильтры',
        'sorting'                   => [
            'asc'       => ':field - возрастание',
            'desc'      => ':field - убывание',
            'helper'    => 'Управление порядком показа результатов.',
        ],
        'title'                     => 'Фильтры',
    ],
    'fix-this-issue'            => 'Исправьте это',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Добавить дату календаря',
        ],
        'copy_options'  => 'Параметры копирования',
    ],
    'helpers'                   => [
        'copy_options'  => 'Следующие элементы объекта будут скопированы в новый объект.',
    ],
    'hidden'                    => 'Скрытость',
    'hints'                     => [
        'attribute_template'    => 'Выбранный шаблон атрибутов будет применяться при сохранении объекта.',
        'calendar_date'         => 'Дата календаря позволяет легко фильтровать списки, а также добавляет событие в выбранный календарь.',
        'gallery_header'        => 'Если у объекта нет изображения заголовка, использовать изображение из галереи.',
        'gallery_image'         => 'Если у объекта нет изображения, использовать изображение из галереи.',
        'header_image'          => 'Это изображение будет находиться над объектом. Лучше всего использовать широкое изображение.',
        'image_limitations'     => 'Форматы: :formats. Размер файла: до :size.',
        'image_patreon'         => 'Увеличить максимальный размер файла?',
        'is_private'            => 'Скрытые объекты могут видеть только участники кампании с ролью "Админ".',
        'is_star'               => 'Закрепленные элементы отображаются в меню объекта.',
        'tooltip'               => 'Автоматическая подсказка будет заменена на содержание этого поля. HTML код не поддерживается, но можно упоминать другие объекты с помощью продвинутых упоминаний.',
        'visibility'            => 'Значение "Админ" означает, что видеть этот объект могут только админы. Значение "Вы" означает, что его можете видеть только вы.',
    ],
    'history'                   => [
        'created'       => 'Создано <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Создано <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Неизвестно',
        'updated'       => 'Изменено <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'updated_date'  => 'Изменено <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'view'          => 'Показать историю объекта',
    ],
    'image'                     => [
        'error' => 'Нам не удалось получить данное изображение. Возможно, сайт не позволяет нам скачать изображение (такое случается с Squarespace и DeviantArt) или эта ссылка уже не действительна. Пожалуйста, проверьте также, что изображение не превышает :size.',
    ],
    'is_not_private'            => 'В данный момент этот объект открыт.',
    'is_private'                => 'Этот объект скрыт и виден только участникам роли "Админ".',
    'legacy'                    => 'Старое',
    'linking_help'              => 'Как создавать ссылки на другие объекты',
    'manage'                    => 'Управление',
    'move'                      => [],
    'navigation'                => [
        'cancel'    => 'отменить',
        'or_cancel' => 'или :cancel',
    ],
    'new_entity'                => [
        'error' => 'Пожалуйста, проверьте значения.',
        'fields'=> [
            'name'  => 'Название',
        ],
        'title' => 'Новый объект',
    ],
    'panels'                    => [
        'appearance'            => 'Оформление',
        'attribute_template'    => 'Шаблон атрибутов',
        'calendar_date'         => 'Дата календаря',
        'entry'                 => 'Статья',
        'general_information'   => 'Основная информация',
        'move'                  => 'Переместить',
        'system'                => 'Система',
    ],
    'permissions'               => [
        'action'            => 'Действие',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Разрешить',
                'deny'      => 'Запретить',
                'ignore'    => 'Не изменять',
                'remove'    => 'Удалить',
            ],
            'bulk_entity'   => [
                'allow'     => 'Разрешить',
                'deny'      => 'Запретить',
                'inherit'   => 'Наследовать',
            ],
            'delete'        => 'Удалить',
            'edit'          => 'Редактировать',
            'entity_note'   => 'Заметки объекта',
            'read'          => 'Читать',
            'toggle'        => 'Изменить',
        ],
        'allowed'           => 'Позволено',
        'fields'            => [
            'member'    => 'Участник',
            'role'      => 'Роль',
        ],
        'helper'            => 'Используйте эту страницу, чтобы назначить, как пользователи и роли могут взаимодействовать с этим объектом. :allow',
        'helpers'           => [
            'setup' => 'Используйте эту страницу, чтобы назначить, как пользователи и роли могут взаимодействовать с этим объектом. :allow позволяет пользователю или роли совершать это действие. :deny запрещает это действие. :inherit будет использовать то же разрешение, что роль пользователя или основная роль. Пользователь с :allow может совершать действие, которое запрещено для его роли.',
        ],
        'inherited'         => 'Это разрешение у этой роли уже назначено для этого типа объектов.',
        'inherited_by'      => 'Этот пользователь входит в роль ":role", у которой есть эти разрешения для этого типа объектов.',
        'success'           => 'Разрешения сохранены.',
        'title'             => 'Разрешения',
        'too_many_members'  => 'В этой кампании слишком много участников (>10) для отображения этой страницы. Пожалуйста, используйте кнопку "Разрешения" на странице объекта для детальной настройки разрешений.',
    ],
    'placeholders'              => [
        'ability'       => 'Выберите способность',
        'calendar'      => 'Выберите календарь',
        'character'     => 'Выберите персонажа',
        'entity'        => 'Выберите объект',
        'event'         => 'Выберите событие',
        'family'        => 'Выберите семью',
        'gallery_image' => 'Выберите изображение из галереи',
        'image_url'     => 'Вы также можете ввести URL изображения.',
        'item'          => 'Выберите предмет',
        'journal'       => 'Выберите журнал',
        'location'      => 'Выберите локацию',
        'map'           => 'Выберите карту',
        'note'          => 'Выберите заметку',
        'organisation'  => 'Выберите организацию',
        'quest'         => 'Выберите квест',
        'race'          => 'Выберите расу',
        'tag'           => 'Выберите тэг',
        'timeline'      => 'Выберите хронологию',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Добавить связь',
        ],
        'fields'    => [
            'location'  => 'Положение',
            'name'      => 'Название',
            'relation'  => 'Связь',
        ],
        'hint'      => 'Для обозначения отношений между объектами можно создавать связи.',
    ],
    'remove'                    => 'Удалить',
    'rename'                    => 'Переименовать',
    'save'                      => 'Сохранить',
    'save_and_close'            => 'Сохранить и Закрыть',
    'save_and_copy'             => 'Сохранить и Копировать',
    'save_and_new'              => 'Сохранить и Создать',
    'save_and_update'           => 'Сохранить и Изменить',
    'save_and_view'             => 'Сохранить и Открыть',
    'search'                    => 'Искать',
    'select'                    => 'Выбрать',
    'superboosted_campaigns'    => 'Супер-усиленные кампании',
    'tabs'                      => [
        'abilities'     => 'Способности',
        'assets'        => 'Ресурсы',
        'attributes'    => 'Атрибуты',
        'boost'         => 'Усиление',
        'calendars'     => 'Календари',
        'connections'   => 'Связи',
        'default'       => 'Основная',
        'events'        => 'События',
        'inventory'     => 'Инвентарь',
        'links'         => 'Ссылки',
        'map-points'    => 'Точки на карте',
        'mentions'      => 'Упоминания',
        'menu'          => 'Меню',
        'notes'         => 'Заметки объекта',
        'permissions'   => 'Разрешения',
        'profile'       => 'Профиль',
        'quests'        => 'Квесты',
        'relations'     => 'Связи',
        'reminders'     => 'Напоминания',
        'story'         => 'История',
        'timelines'     => 'Хронологии',
        'tooltip'       => 'Подсказка',
    ],
    'update'                    => 'Обновить',
    'users'                     => [
        'unknown'   => 'Неизвестный',
    ],
    'view'                      => 'Показать',
    'visibilities'              => [
        'admin'         => 'Админ',
        'admin-self'    => 'Вы и Админ',
        'all'           => 'Все',
        'members'       => 'Участники',
        'self'          => 'Вы',
    ],
];
