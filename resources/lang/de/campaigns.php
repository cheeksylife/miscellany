<?php

return [
    'create'                            => [
        'description'           => 'Erstelle eine neue Kampagne',
        'helper'                => [
            'first'     => 'Danke, dass du unsere App ausprobierst! Bevor es losgehen kann, brauchen wir nur eine Kleinigkeit von dir, deinen <b>Kampagnennamen</b>. Das ist der Name deiner Welt, der sie von anderen unterscheidet, also muss er einzigartig sein. Wenn du noch keinen geeigneten Namen hast, mach dir keine Sorgen, du kannst ihn <b>jederzeit ändern</b>, oder weitere Kampagnen erstellen.',
            'second'    => 'Aber genug Geplauder! Was soll es sein?',
            'title'     => 'Willkommen bei :name!',
            'welcome'   => <<<'TEXT'
Bevor Sie fortfahren, müssen Sie einen Kampagnennamen auswählen. Das ist der Name deiner Welt. Wenn Sie noch keinen guten Namen haben, machen Sie sich keine Sorgen, Sie können ihn später jederzeit ändern oder weitere Kampagnen erstellen.

Vielen Dank, dass Sie sich Kanka angeschlossen haben, und willkommen in unserer florierenden Community!
TEXT
,
        ],
        'success'               => 'Kampagne erstellt.',
        'success_first_time'    => 'Deine Kampagne wurde erstellt! Da es deine erste Kampagne ist, haben wir ein paar Dinge für dich erstellt, die dir helfen sollen, loszulegen und hoffentlich ein bisschen Inspiration liefern, was du alles machen kannst.',
        'title'                 => 'Neue Kampagne erstellen',
    ],
    'destroy'                           => [
        'action'    => 'Kampagne löschen',
        'helper'    => 'Sie können die Kampagne nur löschen, wenn Sie das einzige Mitglied in der Kampagne sind.',
        'success'   => 'Kampagne gelöscht',
    ],
    'edit'                              => [
        'description'   => 'Bearbeite deine Kampagne',
        'success'       => 'Kampagne aktualisiert',
        'title'         => 'Kampagne :campaign bearbeiten',
    ],
    'entity_note_visibility'            => [
        'pinned'    => 'Neue Objektnotizen anheften',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Die Persönlichkeit neuer Charaktere ist im Standard auf privat eingestellt.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Neue Objekte sind privat',
    ],
    'errors'                            => [
        'access'        => 'Du hast keinen Zugang zu dieser Kampagne.',
        'superboosted'  => 'Diese Funktion ist nur für Kampagnen mit Superboost verfügbar.',
        'unknown_id'    => 'Unbekannte Kampagne.',
    ],
    'export'                            => [
        'description'       => 'Exportiere die Kampagne.',
        'errors'            => [
            'limit' => 'Du hast dein Limit von einem Export pro Tag erreicht. Bitte versuche es morgen wieder.',
        ],
        'helper'            => 'Exportiere deine Kampagne. Eine Benachrichtigung mit dem Downloadlink wir dir bereit gestellt.',
        'helper_secondary'  => 'Es werden zwei Dateien zur Verfügung gestellt, eine mit dem Objektexporter als JSON und eine mit Bildern, die auf Objekte hochgeladen wurden. Bitte beachte, dass bei größeren Kampagnen der Bilderexport abstürzt und nur mit der :api wiederhergestellt werden kann.',
        'success'           => 'Der Export deiner Kampagne wird vorbereitet. Du erhältst eine Nachricht in Kanka sobald dein Download bereit steht.',
        'title'             => 'Kampagne :name Export',
    ],
    'fields'                            => [
        'boosted'                       => 'geboosted durch',
        'connections'                   => 'Verbindungstabelle eines Objekts standardmäßig anzeigen (anstelle des Beziehungs-Explorers für verstärkte Kampagnen)',
        'css'                           => 'CSS',
        'description'                   => 'Beschreibung',
        'entity_count'                  => 'Objekt Zähler',
        'entity_note_visibility'        => 'Objektnotizen angeheftet',
        'entity_personality_visibility' => 'Charakter Persönlichkeit Sichtbarkeit',
        'entity_visibility'             => 'Objektsichtbarkeit',
        'entry'                         => 'Kampagnenbeschreibung',
        'excerpt'                       => 'Zusammenfassung',
        'followers'                     => 'Abonnenten',
        'header_image'                  => 'Header Bild',
        'hide_history'                  => 'Objektverlauf ausblenden',
        'hide_members'                  => 'Kampagnenmitglieder ausblenden',
        'image'                         => 'Bild',
        'locale'                        => 'Sprache',
        'name'                          => 'Name',
        'nested'                        => 'Standardmäßig verschachtelte Objektslisten, wenn verfügbar',
        'open'                          => 'Offen für Bewerbungen',
        'public_campaign_filters'       => 'Öffentliche Kampagnenfilter',
        'related_visibility'            => 'Verwandte Elemente Sichtbarkeit',
        'rpg_system'                    => 'Rollenspielsysteme',
        'superboosted'                  => 'supergeboosted von',
        'system'                        => 'System',
        'theme'                         => 'Thema',
        'tooltip_family'                => 'Deaktivieren Sie Familiennamen in den QuickInfos',
        'tooltip_image'                 => 'Objektbild in QuickInfos anzeige',
        'visibility'                    => 'Sichtbarkeit',
    ],
    'following'                         => 'Abonniert',
    'helpers'                           => [
        'boost_required'                => 'Für diese Funktion muss die Kampagne geboosted werden. Weitere Informationen finden Sie hier :settings page.',
        'boosted'                       => 'Einige Funktionen sind freigeschaltet, da diese Kampagne geboosted wird. Weitere Informationen finden Sie auf der :settings page.',
        'css'                           => 'Schreibe dein eigenes CSS, das du auf die Seiten deiner Kampagne laden kannst. Bitte beachte, dass jeder Missbrauch dieser Funktion dazu führen kann, dass dein benutzerdefiniertes CSS entfernt wird. Wiederholungen oder schwerwiegende Verstöße können dazu führen, dass deine Kampagne entfernt wird.',
        'dashboard'                     => 'Passen Sie die Anzeige des Kampagnen-Dashboard-Widgets an, indem Sie die folgenden Felder ausfüllen.',
        'entity_note_visibility'        => 'Beim Erstellen einer neuen Objektnotiz wird automatisch die Option "Fixiert" ausgewählt.',
        'entity_personality_visibility' => 'Wenn ein neuer Charakter erstellt wird, wird die "Persönlichkeit sichtbar" Option automatisch deaktiviert.',
        'entity_visibility'             => 'Wenn du ein neues Objekt erstellst, wird es automatisch auf "Privat" gesetzt.',
        'excerpt'                       => 'Die Kampagnenzusammenfassung wird im Dashboard angezeigt. Schreib daher ein paar Sätze, die deine Welt vorstellen. Idealerweise hältst du es kurz und informativ.',
        'header_image'                  => 'Das Bild wird im Widget des Kampagnen-Header-Dashboards als Hintergrund angezeigt.',
        'hide_history'                  => 'Aktivieren Sie diese Option, um den Verlauf von Objekten vor Nichtmitglieder der Kampagne zu verbergen.',
        'hide_members'                  => 'Aktivieren Sie diese Option, um die Liste der Kampagnenmitglieder der Kampagne für Nicht-Administratoren auszublenden.',
        'locale'                        => 'Die Sprache, in der deine Kampagne geschrieben ist. Dies wird genutzt, um Inhalte zu erstellen und öffentliche Kampagnen zu gruppieren.',
        'name'                          => 'Deine Kampagne/Welt kann einen beliebigen Namen haben, solange dieser mindestens 4 Buchstaben oder Zahlen enthält.',
        'public_campaign_filters'       => 'Helfen Sie anderen, die Kampagne unter anderen öffentlichen Kampagnen zu finden, indem Sie die folgenden Informationen bereitstellen.',
        'public_no_visibility'          => 'Kopf hoch! Ihre Kampagne ist öffentlich, aber die öffentliche Rolle der Kampagne kann auf nichts zugreifen. :fix.',
        'related_visibility'            => 'Standardwert für die Sichtbarkeit beim Erstellen eines neuen Elements mit diesem Feld (Objektnotizen, Beziehungen, Fähigkeiten usw.)',
        'system'                        => 'Wenn deine Kampagne öffentlich einsehbar ist, dann wird das System in der :link Seite angezeigt.',
        'systems'                       => 'Um die Benutzer nicht mit Optionen zu überfordern, sind einige Funktionen von Kanka nur mit bestimmten Rollenspielsystemen (z.B. dem D&D 5e-Monster-Werteblock) verfügbar. Wenn wir hier unterstützte Systeme hinzufügen, werden diese Funktionen aktiviert.',
        'theme'                         => 'Legen Sie das Thema für die Kampagne fest und überschreiben Sie die Benutzereinstellungen.',
        'view_public'                   => 'Um Ihre Kampagne als öffentlichen Betrachter anzuzeigen, öffnen Sie :link in einem Inkognito-Fenster.',
        'visibility'                    => 'Eine Kampagne öffentlich machen bedeutet, dass jeder mit einem Link dazu sie sehen kann.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Neue Kampagne',
            ],
        ],
        'title'     => 'Kampagnen',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Einladung',
            'copy'  => 'Kopieren Sie den Link in Ihre Zwischenablage',
            'link'  => 'Neuer Link',
        ],
        'create'                => [
            'button'        => 'Einladen',
            'buttons'       => [
                'create'    => 'Einladung erstellen',
                'send'      => 'sende Einladung',
            ],
            'description'   => 'Lade einen Freund zu deiner Kampagne ein',
            'link'          => 'Link erstellt: <a href=":url" target="_blank">:url</a>',
            'success'       => 'Einladung verschickt.',
            'success_link'  => 'Link :link erstellt',
            'title'         => 'Lade jemanden zu deiner Kampagne ein',
        ],
        'destroy'               => [
            'success'   => 'Einladung entfernt.',
        ],
        'email'                 => [
            'link'      => '<a href=":link">Trete :name\'s Kampagne bei</a>',
            'link_text' => ':name´s Kampagne beigetreten',
            'subject'   => ':name hat dich eingeladen, seiner Kampagne \':campaign\' auf kanka.io beizutreten! Nutze den folgenden Link, um die Einladung anzunehmen.',
            'title'     => 'Einladung von :name',
        ],
        'error'                 => [
            'already_member'    => 'Du bist bereits Mitglied dieser Kampagne',
            'inactive_token'    => 'Dieses Token wurde bereits genutzt oder die Kampagne existiert nicht mehr.',
            'invalid_token'     => 'Dieser Token ist nicht mehr gültig.',
            'login'             => 'Bitte logge dich ein oder registriere dich, um der Kampagne beizutreten.',
        ],
        'fields'                => [
            'created'   => 'Senden',
            'email'     => 'Email',
            'role'      => 'Rolle',
            'type'      => 'Typ',
            'validity'  => 'Gültigkeit',
        ],
        'helpers'               => [
            'email'     => 'Unsere E-Mails werden häufig als Spam gekennzeichnet und können sich bis zu einigen Stunden verzögern, bevor sie in Ihrem Posteingang angezeigt werden.',
            'validity'  => 'Wie viele Nutzer können diesen Link benutzen, bevor er ausläuft.',
        ],
        'placeholders'          => [
            'email' => 'Email Adresse der Person, die du zu der Kampagne einladen möchtest',
        ],
        'types'                 => [
            'email' => 'Email',
            'link'  => 'Link',
        ],
        'unlimited_validity'    => 'Unbegrenzt',
    ],
    'leave'                             => [
        'confirm'   => 'Bist du sicher, dass du die Kampagne :name verlassen möchtest? Du hast danach keinen Zugang mehr, außer ein Besitzer der Kampagne lädt dich erneut ein.',
        'error'     => 'Kann die Kampagne nicht verlassen.',
        'success'   => 'Du hast die Kampagne verlassen.',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Wechseln',
            'switch-back'   => 'Zurück zu meinem User',
        ],
        'create'                => [
            'title' => 'Füge ein Mitglied zu deiner Kampagne hinzu.',
        ],
        'description'           => 'Verwalte die Mitglieder deiner Kampagne',
        'edit'                  => [
            'description'   => 'Bearbeite ein Mitglied deiner Kampagne',
            'title'         => 'Bearbeite Mitglied :name',
        ],
        'fields'                => [
            'joined'        => 'Beigetreten',
            'last_login'    => 'Letzter Login',
            'name'          => 'Nutzer',
            'role'          => 'Rolle',
            'roles'         => 'Rollen',
        ],
        'help'                  => 'Es gibt kein Limit der Anzahl der Mitglieder einer Kampagne und als ein Admin kannst du Mitglieder entfernen, die nicht mehr aktiv sind.',
        'helpers'               => [
            'admin' => 'Als Mitglied der Administratorrolle der Kampagne können Sie neue Benutzer einladen, inaktive Benutzer entfernen und deren Berechtigungen ändern. Verwenden Sie die Schaltfläche Wechseln, um die Berechtigungen eines Mitglieds zu testen. Weitere Informationen zu dieser Funktion finden Sie unter :link.',
            'switch'=> 'Zu diesem User wechseln',
        ],
        'impersonating'         => [
            'message'   => <<<'TEXT'
Du siehst die Kampagne jetzt als ein anderer User.
Einige Funktionen wurden deaktiviert, aber ansonsten sieht es genau so aus wie es der User sehen würde. Um zurück zu deinem User zu wechseln, benutze den "Zurück zu meinem User" Button, wo sonst der Logout Button zu finden ist.
TEXT
,
            'title'     => 'Ansicht von :name',
        ],
        'invite'                => [
            'description'   => 'Du kannst deine Freunde zu deiner Kampagne einladen, in dem du ihre Email Adresse eingibst. Wenn sie die Einladung annehmen, werden sie als \'Zuschauer\' hinzugefügt. Du kannst die Einladung auch jederzeit abbrechen.',
            'more'          => 'Du kannst neue Rollen unter :link hinzufügen.',
            'roles_page'    => 'Rollenseite',
            'title'         => 'Einladen',
        ],
        'manage_roles'          => 'Verwalten von Benutzerrollen',
        'roles'                 => [
            'member'    => 'Mitglied',
            'owner'     => 'Besitzer (privat Option sichtbar)',
            'player'    => 'Spieler',
            'public'    => 'Öffentlich',
            'viewer'    => 'Zuschauer',
        ],
        'switch_back_success'   => 'Du bist nun zurück in deinem eigentlichen User.',
        'title'                 => 'Kampagne :name Mitglieder',
        'updates'               => [
            'added'     => 'Rolle :role zu :user hinzugefügt',
            'removed'   => 'Rolle :role von :user entfernt',
        ],
        'your_role'             => 'Du bist ein <i>:role</i>',
    ],
    'open_campaign'                     => [
        'helper'    => 'Mit einer öffentlichen Kampagne, die als offen festgelegt ist, können Benutzer eine Berwerbung senden um teilzunehmen. Die Liste der Bewerbungen finden Sie auf unserer :link Seite.',
        'link'      => 'Kampagnenbewerbungen',
        'title'     => 'offene Kampagne',
    ],
    'panels'                            => [
        'boosted'   => 'Geboosted',
        'dashboard' => 'Dashboard',
        'permission'=> 'Berechtigung',
        'setup'     => 'erstellen',
        'sharing'   => 'Teilen',
        'systems'   => 'Systeme',
        'ui'        => 'Schnittstelle',
    ],
    'placeholders'                      => [
        'description'   => 'Eine kurze Zusammenfassung deiner Kampagne',
        'locale'        => 'Sprachcode',
        'name'          => 'Dein Kampagnenname',
        'system'        => 'D&D 5e, 3.5, Pathfinder, Gurps, DSA',
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Rolle hinzufügen',
            'permissions'   => 'Berechtigungen verwalten',
            'rename'        => 'Rolle umbenennen',
        ],
        'admin_role'    => 'Administratorenrolle',
        'create'        => [
            'success'   => 'Rolle erstellt.',
            'title'     => 'Erstelle eine neue Rolle für :name',
        ],
        'description'   => 'Verwalte die Rollen deiner Kampagne',
        'destroy'       => [
            'success'   => 'Rolle entfernt.',
        ],
        'edit'          => [
            'success'   => 'Rolle aktualisiert.',
            'title'     => 'Rolle :name bearbeiten',
        ],
        'fields'        => [
            'name'          => 'Name',
            'permissions'   => 'Berechtigungen',
            'type'          => 'Typ',
            'users'         => 'Nutzer',
        ],
        'helper'        => [
            '1' => 'Eine Kampagne kann so viele Rollen haben, wie du willst. Die "Admin" Rolle hat automatisch Zugriff auf alles in einer Kampagne, aber jede andere Rolle kann spezielle Berechtigungen auf unterschiedliche Typen von Objekten (Charaktere, Orte, etc.) haben.',
            '2' => 'Objekte können feiner abgestimmte Berechtigungen haben, die du im "Berechtigungen" Tab des Objekts einstellen kannst. Dieser Tab erscheint, wenn du mehrere Rollen in deiner Kampagne hast.',
            '3' => 'Man kann entweder ein "opt-out" System verwenden, in dem Rollen lesenden Zugriff auf alle Objekte bekommen und mit der "Privat" Checkbox bestimmte Objekte ausgeblendet werden. Oder man gibt Rollen wenige Berechtigungen und setzt jedes Objekt explizit auf sichtbar.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Die öffentliche Rolle hat Berechtigungen, aber die Kampagne ist privat. Sie können diese Einstellung auf der Registerkarte Freigabe ändern, wenn Sie die Kampagne bearbeiten.',
            'public'                => 'Die Rolle "Öffentlich" wird benutzt, wenn jemand eure öffentliche Kampagne ansieht. :more',
            'role_permissions'      => 'Erlaube der Rolle \':name\' die folgenden Aktionen auf allen Objekten.',
        ],
        'members'       => 'Mitglieder',
        'modals'        => [
            'details'   => [
                'button'    => 'benötige Hilfe',
                'campaign'  => 'Kampagnenberechtigungen erlauben Folgendes.',
                'entities'  => 'Hier ist eine kurze Zusammenfassung, was Mitglieder dieser Rolle erhalten, wenn eine Berechtigung festgelegt wird.',
                'more'      => 'Weitere Informationen finden Sie in unserem Tutorial-Video auf Youtube',
                'title'     => 'Berechtigungsdetails',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Erstellen',
                'dashboard'     => 'Dashboard',
                'delete'        => 'Entfernen',
                'edit'          => 'Bearbeiten',
                'entity-note'   => 'Notizen',
                'manage'        => 'Verwalten',
                'members'       => 'Mitglieder',
                'permission'    => 'Verwalte Berechtigungen',
                'read'          => 'Anschauen',
                'toggle'        => 'Alles ändern',
            ],
            'helpers'   => [
                'add'           => 'Erstellen von Objekten dieses Typs zulassen. Sie werden automatisch berechtigt, von ihnen erstellte Objekte anzuzeigen und zu bearbeiten, wenn sie nicht über die Berechtigung zum Anzeigen oder Bearbeiten verfügen.',
                'dashboard'     => 'Erlauben Sie die Bearbeitung der Dashboards und Dashboard-Widgets.',
                'delete'        => 'Erlauben Sie das Entfernen aller Objekte dieses Typs.',
                'edit'          => 'Bearbeitung aller Objekte dieses Typs zulassen.',
                'entity_note'   => 'Auf diese Weise können Benutzer ohne Bearbeitungsberechtigung für ein Objekt Objektsnotizen hinzufügen.',
                'manage'        => 'Erlauben Sie die Bearbeitung der Kampagne wie ein Kampagnenadministrator, ohne dass die Mitglieder die Kampagne löschen können.',
                'members'       => 'Erlauben Sie, neue Mitglieder zur Kampagne einzuladen.',
                'permission'    => 'Erlaube Einstellungsberechtigungen für Objekte dieses Typs, die sie bearbeiten können.',
                'read'          => 'Erlauben Sie die Anzeige aller Objekte dieses Typs, die nicht privat sind.',
            ],
            'hint'      => 'Diese Rolle hat automatisch Zugriff auf alles.',
        ],
        'placeholders'  => [
            'name'  => 'Name der Rolle',
        ],
        'show'          => [
            'description'   => 'Mitglieder und Berechtigungen einer Rolle',
            'title'         => 'Rolle \':role\' für Kampagne \':campaign\'',
        ],
        'title'         => 'Kampagne :name Rollen',
        'types'         => [
            'owner'     => 'Besitzer',
            'public'    => 'Öffentlich',
            'standard'  => 'Standard',
        ],
        'users'         => [
            'actions'   => [
                'add'       => 'Hinzufügen',
                'remove'    => ':user von der :role Rolle',
            ],
            'create'    => [
                'success'   => 'Benutzer zu Rolle hinzugefügt.',
                'title'     => 'Füge ein Mitglied zur Rolle :name hinzu',
            ],
            'destroy'   => [
                'success'   => 'Benutzer aus Rolle entfernt',
            ],
            'fields'    => [
                'name'  => 'Name',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'aktivieren',
        ],
        'boosted'       => 'Diese Funktion befindet sich in der Beta-Phase und ist derzeit nur verfügbar für :boosted.',
        'description'   => 'Aktiviere oder deaktiviere Module für diese Kampagne.',
        'edit'          => [
            'success'   => 'Kampagnen Einstellungen aktualisiert.',
        ],
        'helper'        => 'Du kannst einfach Elemente von deiner Kampagne abschalten, die dann versteckt werden. Wenn du bereits Objekte in dieser Kategorie angelegt hast, werden diese nicht gelöscht, nur versteckt.',
        'helpers'       => [
            'abilities'     => 'Erstellen Sie Fähigkeiten, seien es Talente, Zauber oder Kräfte, die Objekten zugewiesen werden können.',
            'calendars'     => 'Der Ort, um die Kalender deiner Welt zu erstellen.',
            'characters'    => 'Die Leute, die deine Welt bevölkern.',
            'conversations' => 'Fiktive Gespräche zwischen Charakteren oder zwischen Kampagnennutzern.',
            'dice_rolls'    => 'Für die, die Kanka für RPG Kampagnen benutzen, eine Möglichkeit Würfelwürfe zu verwalten.',
            'events'        => 'Feiertage, Festlichkeiten, Katastrophen, Geburtstage, Kriege.',
            'families'      => 'Klans oder Familien, deren Beziehungen und deren Mitglieder.',
            'inventories'   => 'verwalten sie die Inventare ihrer Objekte',
            'items'         => 'Waffen, Fahrzeuge, Reliquien, Tränke.',
            'journals'      => 'Beobachtungen von Spielern oder Spielvorbereitungen vom Spielleiter.',
            'locations'     => 'Planeten, Ebenen, Kontinente, Flüsse, Staaten, Siedlungen, Tempel, Tavernen.',
            'maps'          => 'Laden Sie Karten mit Ebenen und Markierungen hoch, die auf andere Objekte in der Kampagne verweisen.',
            'menu_links'    => 'Selbsterstellte Menü Links in der Seitenleiste.',
            'notes'         => 'Sagen, Religionen, Geschichte, Magie, Spezies.',
            'organisations' => 'Kulte, Militäreinheiten, Fraktionen, Gilden.',
            'quests'        => 'Um Aufgaben mit Charakteren und Ort zu verfolgen.',
            'races'         => 'Wenn deine Kampagne mehr als eine Spezies hat, hier kannst du den Überblick behalten.',
            'tags'          => 'Jedes Objekt kann eine Kategorie habe. Kategorien können zu anderen Kategorien gehören und Objekte können nach Kategorie gefiltert werden.',
            'timelines'     => 'Stellen Sie die Geschichte Ihrer Welt mit Zeitstrahlen dar.',
        ],
        'title'         => 'Kampagne :name Module',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Boost Kampagne',
            'edit'  => 'Kampagne editieren',
            'leave' => 'Kampagne verlassen',
        ],
        'description'   => 'Eine detaillierte Ansicht der Kampagne',
        'menus'         => [
            'configuration'     => 'Aufbau',
            'overview'          => 'Übersicht',
            'user_management'   => 'Benutzerverwaltung',
        ],
        'tabs'          => [
            'achievements'      => 'Erfolge',
            'applications'      => 'Bewerbungen',
            'campaign'          => 'Kampagne',
            'default-images'    => 'Standardbilder',
            'export'            => 'Export',
            'information'       => 'Informationen',
            'members'           => 'Mitglieder',
            'menu'              => 'Menü',
            'plugins'           => 'Plugins',
            'recovery'          => 'Wiederherstellen',
            'roles'             => 'Rollen',
            'settings'          => 'Einstellungen',
        ],
        'title'         => 'Kampagne :name',
    ],
    'superboosted'                      => [
        'gallery'   => [
            'error' => [
                'text'  => 'Das Hochladen von Bildern im Texteditor ist eine Funktion, die nur verfügbar ist für: Superboosted.',
                'title' => 'Hochladen von Kampagnengalerie-Bildern',
            ],
        ],
    ],
    'ui'                                => [
        'helper'    => 'Verwenden Sie diese Einstellungen, um die Art und Weise zu ändern, in der einige Elemente in der Kampagne angezeigt werden.',
        'other'     => 'Andere',
    ],
    'visibilities'                      => [
        'private'   => 'Privat',
        'public'    => 'Öffentlich',
        'review'    => 'Wartet auf Überprüfung',
    ],
];
