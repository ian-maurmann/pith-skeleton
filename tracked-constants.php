<?php

/**
 * Tracked Constants
 * -----------------
 *
 * This is the place for constants that should be viewable and tracked by Git.
 *
 * @noinspection PhpConstantNamingConventionInspection - Long constant names are ok.
 */

// Turn on strict types
declare(strict_types=1);

// Define our Constants
const PITH_APP_ROUTE_LIST = '\\MyOrganizationNamespace\\MyApplicationNamespace\\ApplicationRouteList'; // 1) <--- Set Namespace



const PITH_DEMO_PAGE_MAIN_TITLE            = 'Demo Page - Pith Framework';
const PITH_DEMO_PAGES_ROUTE_GROUP_PATH     = '/1111/1111/demo';
const PITH_ENV_INFO_PAGES_ROUTE_GROUP_PATH = '/2222/2222/env-info';
const PITH_USER_SYSTEM_AJAX_ENDPOINTS_PATH = '/ajax/user-system';

const SHARED_UI_USER_LOGIN_FORM_ACTION_LINK             = '/shared-ui/perform-login';
const SHARED_UI_USER_LOGIN_FORM_PAGE_LINK               = '/login';
const SHARED_UI_USER_LOGIN_SUCCESS_LANDING_PAGE_LINK    = '/';
const SHARED_UI_USER_PERFORM_LOGOUT_LINK                = '/shared-ui/perform-logout';
const SHARED_UI_USER_LOGOUT_SUCCESS_LANDING_PAGE_LINK   = '/1111/1111/demo?logged-out=yes';
const SHARED_UI_USER_LOGOUT_FAILURE_LANDING_PAGE_LINK   = '/1111/1111/demo?logged-out=no';
const SHARED_UI_USER_CREATION_ON_SUCCESS_GOTO_PAGE_LINK = SHARED_UI_USER_LOGIN_FORM_PAGE_LINK;

const PITH_PANEL_PATH = '/3333/3333/panel';
const TASKS_URL_PATH   = '/shared-infrastructure/run/task';

const PITH_IMPRESSION_LOG_LOCATION    = 'logs/impressions-logs/';
const PITH_TASK_LOG_LOCATION          = 'logs/task-logs/';
const PITH_TASK_OUTPUT_LOG_LOCATION   = 'logs/task-output-logs/';
const PITH_PHP_ERROR_LOG_LOCATION     = 'logs/php-error-logs/';
const PITH_TOUCHSTONE_FOLDER_LOCATION = 'cache/touchstones/';
const PITH_LATTE_CACHE_PATH           = 'cache/latte-cache/';

const PITH_APP_TASK_WORKSPACES_LIST = '\\Pith\\Framework\\SharedInfrastructure\\Tasks\\TaskWorkspacesList'; // 2) <--- Set Task Workspace List, if running tasks
const TASKS_ROUTE_LIST              = '\\Pith\\Framework\\SharedInfrastructure\\Tasks\\TasksRouteList'; // 3) <--- Set Task List, if running tasks


// Migration Paths,
// The first namespace is the default when generating new migrations
// The default can be overridden by specifying the namespace in the migration command
// Example: php mig migrations:generate --namespace=Pith\\Framework\\TestMigration
const PITH_MIGRATIONS_PATHS = [
    'MyOrganizationNamespace\\MyApplicationNamespace\\Migration' => './migrations', // 4) <--- Set Namespace for Migration
    'Pith\\Framework\\Migration'                                 => './vendor/pith/framework/data/migrations',
    'Pith\\DemoApp\\Migration'                                   => './vendor/pith/demo-app/migrations',
];