<?php

return [
    'create'                            => [
        'description'           => 'Créer une nouvelle campagne',
        'helper'                => [
            'title'     => 'Bienvenue à :name',
            'welcome'   => <<<'TEXT'
Avant d'aller plus loin, tu dois choisir un nom de campagne. C'est le nom de ton monde. Si tu n'as pas encore un bon nom, pas de panique, tu peux toujours le changer plus tard ou créer plus de campagnes.

Merci d'avoir rejoint Kanka et bienvenue dans notre communauté florissante!
TEXT
,
        ],
        'success'               => 'Campagne créée.',
        'success_first_time'    => 'La première campagne a été créée! Quelques éléments ont été créés pour aider à bien démarrer.',
        'title'                 => 'Nouvelle Campagne',
    ],
    'destroy'                           => [
        'action'    => 'Supprimer la campagne',
        'helper'    => 'Seules les campagnes dont tu es le seul membre peuvent être supprimées.',
        'success'   => 'Campagne supprimée.',
    ],
    'edit'                              => [
        'description'   => 'Modifier la campagne',
        'success'       => 'Campagne modifiée.',
        'title'         => 'Modifier la campagne :campaign',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'Les nouveaux personnages ont leur personnalité privée par défault.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nouvelles entités privées',
    ],
    'errors'                            => [
        'access'        => 'Accès refusé pour cette campagne.',
        'superboosted'  => 'Cette fonctionnalité est seulement accessible pour les campagnes superboostées.',
        'unknown_id'    => 'Campagne inconnue.',
    ],
    'export'                            => [
        'description'       => 'Exporter la campagne.',
        'errors'            => [
            'limit' => 'Nombre d\'exports maximal par jour excédé pour cette campagne.',
        ],
        'helper'            => 'Export de la campagne. Une notification contenant un lien de téléchargement sera généré.',
        'helper_secondary'  => 'Deux fichiers seront générés. Le premier contiendra toutes les entités de la campagne au format JSON, et le second contiendra les images uploadées sur les entités. Si l\'export des images ne fonctionne pas (typiquement sur les grandes campagnes), nous recommandons d\'utiliser l\':api.',
        'success'           => 'L\'export de la campagne est en préparation. Une notification dans Kanka avec un lien de téléchargement sera généré dès que c\'est prêt.',
        'title'             => 'Export Campagne :name',
    ],
    'fields'                            => [
        'boosted'                   => 'Boosté par',
        'connections'               => 'Afficher le tableau de connections d\'une entité par défaut (au lieu de l\'explorateur de relation pour les campagnes boostées)',
        'css'                       => 'CSS',
        'description'               => 'Description',
        'entity_count'              => 'Nombre d\'entités',
        'entry'                     => 'Description de la campagne',
        'excerpt'                   => 'Description de la campagne sur le tableau de bord',
        'followers'                 => 'Followers',
        'header_image'              => 'Image de fond pour le tableau de bord',
        'hide_history'              => 'Cacher l\'historique des entités',
        'hide_members'              => 'Cacher les membres de la campagne',
        'image'                     => 'Image',
        'locale'                    => 'Langue',
        'name'                      => 'Nom',
        'nested'                    => 'Afficher les listes d\'entités de manière imbriquée par défaut',
        'open'                      => 'Ouvert aux applications',
        'public_campaign_filters'   => 'Filtres pour les campagnes publiques',
        'related_visibility'        => 'Visibilité des éléments liés',
        'rpg_system'                => 'Système RPG',
        'superboosted'              => 'Superboosté par',
        'system'                    => 'Système',
        'theme'                     => 'Thème',
        'tooltip_family'            => 'Désactiver le nom de famille des info-bulles',
        'tooltip_image'             => 'Afficher l\'image de l\'entité dans les info-bulles',
        'visibility'                => 'Visibilité',
    ],
    'following'                         => 'Suivant',
    'helpers'                           => [
        'boost_required'            => 'Cette fonctionnalité requiert une campagne boostée. Plus d\'info sur la page :settings.',
        'boosted'                   => 'Cette campagne est boostée ce qui active certaines fonctionnalités. Plus de détails sur la page :settings.',
        'css'                       => 'Définir du code CSS pour la campagne qui sera chargé sur chaque page. Abuser de cette fonctionnalité peut mener à une suppression du CSS. Les abus répétés peuvent mener à une suppression de la campagne.',
        'dashboard'                 => 'Contrôler la manière dont l\'en-tête de campagne s\'affiche sur le tableau de bord.',
        'excerpt'                   => 'Le contenu de ce champ sera affiché sur le tableau de bord dans le widget d\'en-tête de campagne. Si ce champ est vide, les 1000 premiers caractères de la description de la campagne seront utilisés à la place.',
        'header_image'              => 'Image affichée en arrière-plan de l\'en-tête de campagne sur le tableau de bord.',
        'hide_history'              => 'Activer cette option pour cacher l\'historique d\'une entité aux membres qui ne sont pas dans le groupe admin de la campagne.',
        'hide_members'              => 'Activer cette option pour cacher la liste des membres de la campagne aux membres qui ne sont pas dans le groupe admin de celle-ci.',
        'locale'                    => 'La langue dans laquelle la campagne est écrite. Ceci est utilisé pour générer du contenu ainsi que pour grouper les campagnes publiques.',
        'name'                      => 'Le nom de la campagne doit contenir au minimum 4 caractères.',
        'public_campaign_filters'   => 'Aides les autres utilisateurs à trouver la campagne parmi les autres campagnes publiques en fournissant les détails suivants.',
        'public_no_visibility'      => 'Attention! La campagne est public, mais le rôle publique de la campagne n\'a pas d\'accès. :fix.',
        'related_visibility'        => 'Visibilité par défaut lors de la création d\'un nouvel élément avec ce champ (note d\'entité, relation, pouvoir, etc)',
        'system'                    => 'Si la campagne est publiquement visible, elle sera affichée dans la page :link.',
        'systems'                   => 'A définir.',
        'theme'                     => 'Définir le thème pour la campagne qui surplante le thème de l\'utilisateur.',
        'view_public'               => 'Pour afficher la campagne comme le ferait un utilisateur public, ouvre :link dans une fenêtre de navigation privée.',
        'visibility'                => 'Une campagne publique peut être vue par toute personne ayant un lien vers celle-ci.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nouvelle Campagne',
            ],
        ],
        'title'     => 'Campagnes',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Inviter',
            'copy'  => 'Copier le lien dans le presse-papier.',
            'link'  => 'Nouveau Lien',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Créer une invitation',
                'send'      => 'Envoyer une invitation',
            ],
            'description'   => 'Invite tes amis à ta campagne',
            'success'       => 'Invitation envoyée.',
            'success_link'  => 'Liens créé: :link',
            'title'         => 'Invite un ami à la campagne',
        ],
        'destroy'               => [
            'success'   => 'Invitation annulée.',
        ],
        'email'                 => [
            'link_text' => 'Joindre la campagne :name',
            'subject'   => ':name t\'as invité à rejoindre la campagne \':campagne\' sur kanka.io! Utilise ce lien pour accepter son invitation.',
            'title'     => 'Invitation de :name',
        ],
        'error'                 => [
            'already_member'    => 'Tu es déjà un membre de cette campagne.',
            'inactive_token'    => 'Ce code d\'activation a déjà été utilisé, ou la campagne n\'existe plus.',
            'invalid_token'     => 'Ce code d\'activation n\'est plus valide.',
            'login'             => 'Connecte-toi ou crée un compte pour joindre la campagne.',
        ],
        'fields'                => [
            'created'   => 'Envoyé',
            'email'     => 'Email',
            'role'      => 'Rôle',
            'type'      => 'Type',
            'validity'  => 'Validité',
        ],
        'helpers'               => [
            'email'     => 'Les emails de Kanka sont souvent traités comme du spam et peuvent prendre jusqu\'à quelques heures avant d\'apparaître dans ta boîte aux lettres.',
            'validity'  => 'Nombre de fois que le lien peut être utilisé avant d\'être désactivé. Laisser vide pour illimité.',
        ],
        'placeholders'          => [
            'email' => 'L\'adresse email de ton ami',
        ],
        'types'                 => [
            'email' => 'Email',
            'link'  => 'Lien',
        ],
        'unlimited_validity'    => 'Illimité',
    ],
    'leave'                             => [
        'confirm'   => 'Es-tu sûr de vouloir quitter :name? Tu n\'auras plus accès aux données, sauf si un Admin de la campagne t\'invite à nouveau.',
        'error'     => 'Impossible de quitter la campagne.',
        'success'   => 'Tu as quitté la campagne.',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Basculer',
            'switch-back'   => 'Retour à mon compte',
        ],
        'create'                => [
            'title' => 'Ajouter un membre à la campagne',
        ],
        'description'           => 'Gestion des membres de la campagne',
        'edit'                  => [
            'description'   => 'Modifier un membre de la campagne',
            'title'         => 'Modifier membre :name',
        ],
        'fields'                => [
            'joined'        => 'Rejoint',
            'last_login'    => 'Dernière connexion',
            'name'          => 'Utilisateur',
            'role'          => 'Rôle',
            'roles'         => 'Rôles',
        ],
        'help'                  => 'Il n\'y a pas de limite sur le nombre de membres dans une campagne. En tant qu\'Admin d\'une campagne, tu peux retirer un membre qui n\'est plus actif à tout moment.',
        'helpers'               => [
            'admin' => 'En tant que membre du rôle admin de la campagne, tu peux inviter de nouveaux membres, enlever ceux qui sont inactifs, et changer leurs permissions. Pour tester les permissions d\'un membre, utilise le bouton Basculer. Plus d\'infos sous :link.',
            'switch'=> 'Basculer vers cet utilisateur',
        ],
        'impersonating'         => [
            'message'   => 'Tu visualises la campagne en tant qu\'un autre utilisateur. Certaines fonctionnalités ont été désactivées, mais le reste réagit exactement tel que l\'utilisateur le verrait. Tu peux revenir à ton utilisateur en cliquant sur le bouton "Retour à mon compte" situé à l\'emplacement du bouton de déconnexion.',
            'title'     => 'Se faisant passer pour :name',
        ],
        'invite'                => [
            'description'   => 'Invite tes amis à la campagne en fournissant une adresse email. Dès qu\'ils auront accepté ton invitation, ils seront ajoutés à la campagne. Tu peux annuler une invitation à tout moment.',
            'more'          => 'Tu peux ajouter plus de rôles sur la :link.',
            'roles_page'    => 'page des rôles',
            'title'         => 'Invitation',
        ],
        'manage_roles'          => 'Gérer les rôles de l\'utilisateur',
        'roles'                 => [
            'member'    => 'Membre',
            'owner'     => 'Administrateur',
            'player'    => 'Joueur',
            'public'    => 'Public',
            'viewer'    => 'Observateur',
        ],
        'switch_back_success'   => 'Tu es de retour à ton compte.',
        'title'                 => 'Membres de la campagne :name',
        'updates'               => [
            'added'     => 'Le rôle :role a été ajouté à :user.',
            'removed'   => 'Le rôle :role a été retiré de :user.',
        ],
        'your_role'             => 'Rôle: \'<i>:rôle</i>\'',
    ],
    'open_campaign'                     => [
        'helper'    => 'Une campagne public définie comme ouverte permet aux utilisateurs d\'envoyer une application pour la rejoindre. Retrouves toutes les applications sous la page :link.',
        'link'      => 'applications de la campagne',
        'title'     => 'Campagne Ouverte',
    ],
    'options'                           => [
        'entity_personality_visibility' => 'Automatiquement définir les traits de personnalités de nouveau personnage comme étant privé par défaut.',
        'entity_visibility'             => 'Automatiquement définir les nouvelles entités comme privées par défaut.',
    ],
    'panels'                            => [
        'boosted'   => 'Boosté',
        'dashboard' => 'Tableau de bord',
        'permission'=> 'Permission',
        'setup'     => 'Configuration',
        'sharing'   => 'Partage',
        'systems'   => 'Systèmes',
        'ui'        => 'Interface',
    ],
    'placeholders'                      => [
        'description'   => 'Une petite description de la campagne',
        'locale'        => 'La langue utilisée',
        'name'          => 'Le nom de la campagne',
        'system'        => 'D&D 5e, 3.5, Pathfinder, Tigres Volants, Gurps',
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Ajouter un rôle',
            'permissions'   => 'Gérer les permissions',
            'rename'        => 'Renommer le rôle',
        ],
        'admin_role'    => 'rôle admin',
        'create'        => [
            'success'   => 'Rôle créé.',
            'title'     => 'Créer un nouveau rôle pour :name',
        ],
        'description'   => 'Gestion des membres de la campagne',
        'destroy'       => [
            'success'   => 'Rôle supprimé.',
        ],
        'edit'          => [
            'success'   => 'Rôle modifié.',
            'title'     => 'Modifier le rôle :name',
        ],
        'fields'        => [
            'name'          => 'Nom',
            'permissions'   => 'Permissions',
            'type'          => 'Type',
            'users'         => 'Utilisateurs',
        ],
        'helper'        => [
            '1' => 'Une campagne peut avoir autant de rôles que désiré. Le rôle "Admin" a automatiquement accès à tout dans une campagne, et chaque autre rôle peut être configuré pour avoir des accès spécifiques à divers entités (personnages, lieux, etc).',
            '2' => 'Les entités individuelles peuvent avoir leurs propres permissions sous l\'onglet "Permissions" de celles-ci. Cet onglet apparait dès le moment qu\'une campagne a plusieurs membres ou rôles.',
            '3' => 'Il y a deux options possibles. Soit le mode "opt-out", ou les rôles ont le droit de lire toutes les entités, couplé à l\'option "Privé" sur les entités pour les cacher. Sinon, il est possible de ne pas donner de droits généraux aux rôles, et à la place donner des rôles individuellement sur les entités pour les rendre visibles.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Le rôle Public a des permissions mais la campagne est privée. La campagne peut être rendue publique sous l\'onglet Partager en modifiant la campagne.',
            'public'                => 'Si la campagne est en mode publique, ce rôle est utilisé pour les visiteurs qui ne font pas partie de la campagne. :more',
            'role_permissions'      => 'Permettre au rôle \':name\' les actions suivantes sur toutes les entités.',
        ],
        'members'       => 'Membres',
        'modals'        => [
            'details'   => [
                'button'    => 'Besoin d\'aide',
                'campaign'  => 'Les permissions de campagne sont les suivants:',
                'entities'  => 'Voici un petit récapitulatif de ce que les membres de ce rôle peuvent faire quand une permission est sélectionnée.',
                'more'      => 'Pour plus d\'information, voir notre tutoriel sur Youtube',
                'title'     => 'Détails de permission',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Créer',
                'dashboard'     => 'Tableau de bord',
                'delete'        => 'Supprimer',
                'edit'          => 'Modifier',
                'entity-note'   => 'Note d\'entité',
                'manage'        => 'Gérer',
                'members'       => 'Membres',
                'permission'    => 'Gérer les permissions',
                'read'          => 'Voir',
                'toggle'        => 'Changer pour tous',
            ],
            'helpers'   => [
                'add'           => 'Permettre de créer des entités de ce type. Un membre aura automatiquement le droit de voir et modifier les entités qu\'il crée si le rôle n\'a pas le droit de voir ou de modifier les entités de ce type.',
                'dashboard'     => 'Permettre de modifier les tableaux de bords et les widgets du tableau de bord.',
                'delete'        => 'Permettre la suppression des entités de ce type.',
                'edit'          => 'Permettre la modifications des entités de ce type.',
                'entity_note'   => 'Ceci permet aux utilisateurs qui n\'ont pas la permission de modifier une entité de pouvoir ajouter des Notes d\'Entités sur celle-ci.',
                'manage'        => 'Permettre la gestion de la campagne tel qu\'un membre du rôle admin, sans permettre aux membres de supprimer la campagne.',
                'members'       => 'Permettre l\'invitation de nouveaux membre à la campagne.',
                'permission'    => 'Permettre la gestion des permissions d\'une entités de ce type qu\'ils peuvent modifier.',
                'read'          => 'Permettre la lecture des entités de ce type qui ne sont pas privées.',
            ],
            'hint'      => 'Ce rôle a automatiquement accès à tout.',
        ],
        'placeholders'  => [
            'name'  => 'Nom du rôle',
        ],
        'show'          => [
            'description'   => 'Membres et Permissions d\'un rôle de campagne',
            'title'         => 'Rôles de campagne',
        ],
        'title'         => 'Rôles de la campagne :name',
        'types'         => [
            'owner'     => 'Propriétaire',
            'public'    => 'Publique',
            'standard'  => 'Standard',
        ],
        'users'         => [
            'actions'   => [
                'add'       => 'Ajouter',
                'remove'    => ':user du rôle :role.',
            ],
            'create'    => [
                'success'   => 'Utilisateur ajouté au rôle.',
                'title'     => 'Ajouter un utilisateur au rôle :name',
            ],
            'destroy'   => [
                'success'   => 'Utilisateur supprimé du rôle.',
            ],
            'fields'    => [
                'name'  => 'Nom',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Activer',
        ],
        'boosted'       => 'Cette fonctionnalité est actuellement en beta et seulement accessible pour les :boosted.',
        'description'   => 'Activer ou désactiver des modules de la campagne.',
        'edit'          => [
            'success'   => 'Campagne modifiée.',
        ],
        'helper'        => 'Tu peux facilement modifier les éléments disponibles pour la campagne. Les éléments déjà créés seront simplement cachés',
        'helpers'       => [
            'abilities'     => 'Créer des pouvoirs, compétences, sorts, etc. qui peuvent être assignés aux entités.',
            'calendars'     => 'Un endroit pour définir les calendriers de ton monde.',
            'characters'    => 'Les personnages de ton monde.',
            'conversations' => 'Conversations fictives entre des personnages ou entre membres de la campagne.',
            'dice_rolls'    => 'Pour ceux qui utilisent Kanka pour une campagne JdR, un système pour des jets de dés.',
            'events'        => 'Jours fériés, festivals, désastres, anniversaires, guerres.',
            'families'      => 'Clans ou familles, leurs relations et leurs membres.',
            'inventories'   => 'Gérer l\'inventaires des entités de la campagne.',
            'items'         => 'Armes, véhicules, artéfacts, objets légendaires.',
            'journals'      => 'Observations écrites par des personnages, ou préparation de session pour le maître de jeu.',
            'locations'     => 'Planètes, plaines, continents, rivières, pays, temples, tavernes.',
            'maps'          => 'Ajouter des cartes et y ajouter des couches et des marqueurs pointant vers des entités de la campagne.',
            'menu_links'    => 'Liens personnalisés dans la navigation.',
            'notes'         => 'Histoires, légendes, religions, magie, races.',
            'organisations' => 'Cultes, unités militaires, factions, guildes.',
            'quests'        => 'Gestionnaire de quêtes avec personnages et lieux.',
            'races'         => 'Si la campagne a plus d\'une race, ce module permet de facilement organiser celles-ci.',
            'tags'          => 'Chaque entité peut avoir plusieurs étiquettes. Les étiquettes peuvent appartenir à d\'autres étiquettes.',
            'timelines'     => 'Représenter l\'histoire du monde de manière visuelle avec des chronologies.',
        ],
        'title'         => 'Modules de la campagne :name',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Booster la campagne',
            'edit'  => 'Modifier la campagne',
            'leave' => 'Quitter la campagne',
        ],
        'description'   => 'Détail d\'une campagne',
        'menus'         => [
            'configuration'     => 'Configuration',
            'overview'          => 'Vue d\'ensemble',
            'user_management'   => 'Gestion d\'utilisateur',
        ],
        'tabs'          => [
            'achievements'      => 'Accomplissements',
            'applications'      => 'Applications',
            'campaign'          => 'Campagne',
            'default-images'    => 'Image par défaut',
            'export'            => 'Export',
            'information'       => 'Information',
            'members'           => 'Membres',
            'menu'              => 'Menu',
            'plugins'           => 'Plugins',
            'recovery'          => 'Récupération',
            'roles'             => 'Rôles',
            'settings'          => 'Modules',
            'styles'            => 'Thèmage',
        ],
        'title'         => 'Campagne :name',
    ],
    'superboosted'                      => [
        'gallery'   => [
            'error' => [
                'text'  => 'Uploader des images dans l\'éditeur de text est une fonctionnalité seulement accessible pour les :superboosted.',
                'title' => 'Galerie de campagne',
            ],
        ],
    ],
    'ui'                                => [
        'helper'    => 'Ces paramètres permettent de changer la manière dont s\'affichent certains éléments dans la campagne.',
        'other'     => 'Autre',
    ],
    'visibilities'                      => [
        'private'   => 'Privée',
        'public'    => 'Publique',
        'review'    => 'En attente de revue',
    ],
];
