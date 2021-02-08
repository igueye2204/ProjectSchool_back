<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/apprenant' => [[['_route' => 'apprenant', '_controller' => 'App\\Controller\\ApprenantController::index'], null, null, null, false, false, null]],
        '/api/admin/competences' => [
            [['_route' => 'addcompetences', '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'addcompetences', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_competences_addcompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'addcompetences'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/grpcompetences' => [
            [['_route' => 'add_grp_competences', '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_grp_competences', '_controller' => 'App\\Controller\\GroupeCompetenceController::addGrpCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupe_competences_add_grp_competences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_grp_competences'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/profilsorties' => [
            [['_route' => 'add_profil', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil', '_controller' => 'App\\Controller\\ProfilSortieController::addProfilSortie'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil'], null, ['POST' => 0], null, false, false, null],
        ],
        '/tag' => [[['_route' => 'tag', '_controller' => 'App\\Controller\\TagController::index'], null, null, null, false, false, null]],
        '/api/admin/users' => [
            [['_route' => 'post_user', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user', '_controller' => 'App\\Controller\\USerController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profils' => [[['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null]],
        '/api/apprenants' => [[['_route' => 'api_apprenants_getapprenant_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'getapprenant'], null, ['GET' => 0], null, false, false, null]],
        '/api/formateurs' => [[['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, true, false, null]],
        '/api/login' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/users/([^/]++)(*:70)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:105)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:136)'
                        .'|a(?'
                            .'|dmin/(?'
                                .'|profils(?'
                                    .'|(?:\\.([^/]++))?(*:181)'
                                    .'|/([^/]++)(?'
                                        .'|/users(?'
                                            .'|(*:210)'
                                            .'|(?:\\.([^/]++))?(*:233)'
                                        .')'
                                        .'|(*:242)'
                                    .')'
                                    .'|ortie/([^/]++)(?'
                                        .'|(*:268)'
                                    .')'
                                .')'
                                .'|users(?'
                                    .'|(?:\\.([^/]++))?(*:301)'
                                    .'|/(?'
                                        .'|([^/]++)(*:321)'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:354)'
                                    .')'
                                .')'
                                .'|competences/([^/]++)(?'
                                    .'|(*:387)'
                                .')'
                                .'|grpcompetences/([^/]++)(?'
                                    .'|(*:422)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(?'
                                .'|(*:453)'
                            .')'
                        .')'
                        .'|chats(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:489)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:527)'
                            .')'
                        .')'
                        .'|formateurs/([^/]++)(?'
                            .'|(*:559)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'update_user', '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user', '_controller' => 'App\\Controller\\USerController::updateUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        105 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        136 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        181 => [[['_route' => 'api_profils_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], ['_format'], ['POST' => 0], null, false, true, null]],
        210 => [[['_route' => 'api_profils_get_users_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_users_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        233 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        242 => [
            [['_route' => 'api_profils_get_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        268 => [
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        301 => [[['_route' => 'api_users_post_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user'], ['_format'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'api_users_update_user_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        387 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        422 => [
            [['_route' => 'api_groupe_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        453 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        489 => [
            [['_route' => 'api_chats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        527 => [
            [['_route' => 'api_chats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_chats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_chats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        559 => [
            [['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
