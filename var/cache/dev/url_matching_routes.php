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
        '/api/admin/profils' => [[['_route' => 'get_profil', '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_nam' => 'get_profil', '_controller' => 'App\\Controller\\ProfilController::getProfil'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profilsdeleted' => [[['_route' => 'get_profil_deleted', '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_nam' => 'get_profil_deleted', '_controller' => 'App\\Controller\\ProfilController::getDeletedUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profilsorties' => [
            [['_route' => 'add_profil', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil', '_controller' => 'App\\Controller\\ProfilSortieController::addProfilSortie'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_profilsortie', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get_profilsortie', '_controller' => 'App\\Controller\\ProfilSortieController::getProfil'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_get_profilsortie_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get_profilsortie'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profilsortiedeleted' => [[['_route' => 'get_profilsortie_deleted', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get_profilsortie_deleted', '_controller' => 'App\\Controller\\ProfilSortieController::getDeletedUsers'], null, ['GET' => 0], null, false, false, null]],
        '/tag' => [[['_route' => 'tag', '_controller' => 'App\\Controller\\TagController::index'], null, null, null, false, false, null]],
        '/api/admin/users' => [
            [['_route' => 'post_user', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user', '_controller' => 'App\\Controller\\USerController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_users', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_nam' => 'get_users', '_controller' => 'App\\Controller\\USerController::getUsers'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/usersdeleted' => [[['_route' => 'get_users_deleted', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_nam' => 'get_users_deleted', '_controller' => 'App\\Controller\\USerController::getDeletedUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/apprenants' => [[['_route' => 'api_apprenants_getapprenant_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'getapprenant'], null, ['GET' => 0], null, false, false, null]],
        '/api/formateurs' => [[['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, true, false, null]],
        '/api/login' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/(?'
                        .'|profils(?'
                            .'|/(?'
                                .'|([^/]++)(*:81)'
                                .'|desarchive/([^/]++)(*:107)'
                            .')'
                            .'|orties/(?'
                                .'|([^/]++)(*:134)'
                                .'|desarchive/([^/]++)(*:161)'
                            .')'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)(?'
                                .'|(*:191)'
                            .')'
                            .'|desarchive/([^/]++)(*:219)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:257)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:288)'
                        .'|a(?'
                            .'|dmin/(?'
                                .'|profil(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:339)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:377)'
                                            .'|([^/]++)(?'
                                                .'|(*:396)'
                                                .'|/users(*:410)'
                                            .')'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:447)'
                                            .')'
                                            .'|([^/]++)/users(?:\\.([^/]++))?(*:485)'
                                        .')'
                                        .'|ortie/([^/]++)(?'
                                            .'|(*:511)'
                                        .')'
                                    .')'
                                    .'|_sorties(?'
                                        .'|(?:\\.([^/]++))?(*:547)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:584)'
                                        .')'
                                    .')'
                                .')'
                                .'|users(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:621)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:645)'
                                        .')'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:682)'
                                        .')'
                                    .')'
                                .')'
                                .'|competences/([^/]++)(?'
                                    .'|(*:716)'
                                .')'
                                .'|grpcompetences/([^/]++)(?'
                                    .'|(*:751)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(?'
                                .'|(*:782)'
                            .')'
                        .')'
                        .'|chats(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:818)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:856)'
                            .')'
                        .')'
                        .'|formateurs/([^/]++)(?'
                            .'|(*:888)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'delete_profil', '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete_profil', '_controller' => 'App\\Controller\\ProfilController::deleteProfil'], ['id'], ['DELETE' => 0], null, false, true, null]],
        107 => [[['_route' => 'desarchive_profil', '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'desarchive_profil', '_controller' => 'App\\Controller\\ProfilController::DProfil'], ['id'], ['DELETE' => 0], null, false, true, null]],
        134 => [[['_route' => 'delete_profilsortie', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete_profilsortie', '_controller' => 'App\\Controller\\ProfilSortieController::deleteProfilSortie'], ['id'], ['DELETE' => 0], null, false, true, null]],
        161 => [[['_route' => 'desarchive_profilsortie', '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'desarchive_profilsortie', '_controller' => 'App\\Controller\\ProfilSortieController::DeleteProfilSort'], ['id'], ['DELETE' => 0], null, false, true, null]],
        191 => [
            [['_route' => 'update_user', '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user', '_controller' => 'App\\Controller\\USerController::updateUser'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete_user', '_controller' => 'App\\Controller\\USerController::delUser'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        219 => [[['_route' => 'desarchive_user', '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'desarchive_user', '_controller' => 'App\\Controller\\USerController::desarchiveUser'], ['id'], ['DELETE' => 0], null, false, true, null]],
        257 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        288 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        339 => [
            [['_route' => 'api_profils_get_profil_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_profil'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_add_profil_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        377 => [[['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        396 => [[['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'api_profils_get_users_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_users_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        447 => [
            [['_route' => 'api_profils_get_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_desarchive_profil_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'desarchive_profil'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        485 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        511 => [
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        547 => [[['_route' => 'api_profil_sorties_get_profilsortie_deleted_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get_profilsortie_deleted'], ['_format'], ['GET' => 0], null, false, true, null]],
        584 => [
            [['_route' => 'api_profil_sorties_desarchive_profilsortie_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'desarchive_profilsortie'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_delete_profilsortie_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete_profilsortie'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        621 => [
            [['_route' => 'api_users_get_users_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_users'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_get_users_deleted_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_users_deleted'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        645 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_update_user_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        682 => [
            [['_route' => 'api_users_delete_user_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete_user'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_desarchive_user_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'desarchive_user'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        716 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        751 => [
            [['_route' => 'api_groupe_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        782 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        818 => [
            [['_route' => 'api_chats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        856 => [
            [['_route' => 'api_chats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_chats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_chats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        888 => [
            [['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
