<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'apprenant' => [[], ['_controller' => 'App\\Controller\\ApprenantController::index'], [], [['text', '/apprenant']], [], []],
    'addcompetences' => [[], ['_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'addcompetences', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], [], [['text', '/api/admin/competences']], [], []],
    'add_grp_competences' => [[], ['_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_grp_competences', '_controller' => 'App\\Controller\\GroupeCompetenceController::addGrpCompetence'], [], [['text', '/api/admin/grpcompetences']], [], []],
    'add_profil' => [[], ['_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil', '_controller' => 'App\\Controller\\ProfilSortieController::addProfilSortie'], [], [['text', '/api/admin/profilsorties']], [], []],
    'tag' => [[], ['_controller' => 'App\\Controller\\TagController::index'], [], [['text', '/tag']], [], []],
    'post_user' => [[], ['_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user', '_controller' => 'App\\Controller\\USerController::addUser'], [], [['text', '/api/admin/users']], [], []],
    'update_user' => [['id'], ['_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user', '_controller' => 'App\\Controller\\USerController::updateUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_profils_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_add_profil_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'add_profil'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_get_users_profil_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_users_profil'], [], [['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_get_profil_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_users_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_users_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/users']], [], []],
    'api_users_post_user_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post_user'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/admin/users']], [], []],
    'api_users_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_users_update_user_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update_user'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_profil_sorties_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/profilsorties']], [], []],
    'api_profil_sorties_add_profil_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'add_profil'], [], [['text', '/api/admin/profilsorties']], [], []],
    'api_profil_sorties_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profilsortie']], [], []],
    'api_profil_sorties_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profilsortie']], [], []],
    'api_profil_sorties_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profilsortie']], [], []],
    'api_competences_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/competences']], [], []],
    'api_competences_addcompetences_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'addcompetences'], [], [['text', '/api/admin/competences']], [], []],
    'api_competences_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_chats_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/chats']], [], []],
    'api_chats_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/chats']], [], []],
    'api_chats_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/chats']], [], []],
    'api_chats_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/chats']], [], []],
    'api_chats_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/chats']], [], []],
    'api_chats_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/chats']], [], []],
    'api_groupe_competences_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/grpcompetences']], [], []],
    'api_groupe_competences_add_grp_competences_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_grp_competences'], [], [['text', '/api/admin/grpcompetences']], [], []],
    'api_groupe_competences_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grpcompetences']], [], []],
    'api_groupe_competences_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grpcompetences']], [], []],
    'api_apprenants_getapprenant_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'getapprenant'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_formateurs_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], [], [['text', '/api/formateurs/']], [], []],
    'api_formateurs_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'authentication_token' => [[], [], [], [['text', '/api/login']], [], []],
];
