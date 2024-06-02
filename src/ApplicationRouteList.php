<?php

/**
 * Application Route List
 * ----------------------
 *
 * @noinspection PhpClassNamingConventionInspection - Long class names are ok.
 */


declare(strict_types=1);

namespace MyOrganizationNamespace\MyApplicationNamespace;

use Pith\Workflow\PithRouteList;

/**
 * Class ApplicationRouteList
 * @package MyOrganizationNamespace\MyApplicationNamespace
 */
class ApplicationRouteList extends PithRouteList
{
    public array $routes = [
        ['route-group', '',              PITH_DEMO_PAGES_ROUTE_GROUP_PATH,                            '\\Pith\\Framework\\SharedInfrastructure\\DemoPagesRouteList'],
        ['route-group', '',              PITH_ENV_INFO_PAGES_ROUTE_GROUP_PATH,                        '\\Pith\\Framework\\SharedInfrastructure\\Pages\\EnvInfoPages\\EnvInfoRouteList'],
        ['route-group', '',              PITH_USER_SYSTEM_AJAX_ENDPOINTS_PATH,                        '\\Pith\\Framework\\SharedInfrastructure\\Endpoints\\UserSystemAjaxEndpoints\\UserSystemAjaxEndpointsRouteList'],
        ['route-group', '',              PITH_PANEL_PATH,                                             '\\Pith\\Framework\\Panel\\PithPanelRouteList'],
        ['route-group', '',              TASKS_URL_PATH,                                              '\\Pith\\Framework\\SharedInfrastructure\\Tasks\\TasksRouteList'],
        ['route',       'POST',          SHARED_UI_USER_LOGIN_FORM_ACTION_LINK,                       '\\Pith\\Framework\\SharedInfrastructure\\Pages\\SharedUiPages\\PerformUserLoginRoute'],
        ['route',       ['GET', 'POST'], SHARED_UI_USER_PERFORM_LOGOUT_LINK,                          '\\Pith\\Framework\\SharedInfrastructure\\Pages\\SharedUiPages\\PerformUserLogoutRoute'],
        ['route',       ['GET', 'POST'], '/',                                                         '\\Pith\\DemoApp\\DemoAppPagesPack\\HomeRoute'],
        ['route',       ['GET', 'POST'], '/default-landing',                                          '\\Pith\\Framework\\SharedInfrastructure\\DefaultLandingRoute'],
        ['route',       ['GET', 'POST'], '/error-403',                                                '\\Pith\\Framework\\SharedInfrastructure\\Error403Route'],
        ['route',       ['GET', 'POST'], '/error-404',                                                '\\Pith\\Framework\\SharedInfrastructure\\Error404Route'],
        ['route',       ['GET', 'POST'], '/error-405',                                                '\\Pith\\Framework\\SharedInfrastructure\\Error405Route'],
        ['route',       'GET',           '/favicon.ico',                                              '\\Pith\\Framework\\SharedUiResourcePack\\PithFrameworkLogoFaviconIcoRoute'],
        ['route',       ['GET', 'POST'], '/login',                                                    '\\Pith\\DemoApp\\DemoAppPagesPack\\LoginRoute'],
        ['route',       ['GET', 'POST'], '/new-user-sign-up',                                         '\\Pith\\DemoApp\\DemoAppPagesPack\\NewUserSignUpRoute'],
        ['route',       ['GET', 'POST'], '/page-2',                                                   '\\Pith\\DemoApp\\DemoAppPagesPack\\Page2Route'],
        ['route',       ['GET', 'POST'], '/page-3',                                                   '\\Pith\\DemoApp\\DemoAppPagesPack\\Page3Route'],
        ['route',       'GET',           '/resources/application/{filepath:.+}',                      '\\MyOrganizationNamespace\\MyApplicationNamespace\\ApplicationResourceRoute'],
        ['route',       'GET',           '/resources/framework/shared-ui/{filepath:.+}',              '\\Pith\\Framework\\SharedUiResourcePack\\SharedUiApplicationResourceRoute'],
        ['route',       'GET',           '/resources/theme/{filepath:.+}',                            '\\Pith\\DemoApp\\DemoAppThemePack\\ThemeResourceRoute'],
        ['route',       'GET',           '/resources/vendor/common-fonts/{filepath:.+}',              '\\Pith\\Framework\\CommonFontsResourcePack\\CommonFontsResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/aero-gel/{filepath:.+}',          '\\PithFront\\PithPackAeroGel\\AeroGelResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/animate.css/{filepath:.+}',       '\\PithFront\\PithPackAnimateCss\\AnimateCssResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/bootstrap/{filepath:.+}',         '\\PithFront\\PithPackBootstrap\\BootstrapResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/fixie-reset/{filepath:.+}',       '\\PithFront\\PithPackFixie\\FixieResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/font-awesome/{filepath:.+}',      '\\PithFront\\PithPackFaIcons\\FaIconsResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/hoja/{filepath:.+}',              '\\PithFront\\PithPackHojaRing\\HojaRingResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/ibm-plex/{filepath:.+}',          '\\PithFront\\PithPackPlex\\PlexResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/jetbrains-mono-nl/{filepath:.+}', '\\PithFront\\PithPackJbMonoNl\\JbMonoNlResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/jquery/{filepath:.+}',            '\\PithFront\\PithPackJquery\\JqueryResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/jscrollpane/{filepath:.+}',       '\\PithFront\\PithPackJscrollpane\\JscrollpaneResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/md-icons/{filepath:.+}',          '\\PithFront\\PithPackMdIcons\\MdIconsResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/oxcss/{filepath:.+}',             '\\PithFront\\PithPackOxcss\\OxcssResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/src-fallback/{filepath:.+}',      '\\PithFront\\PithPackSrcFallback\\SrcFallbackResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/sweetalert/{filepath:.+}',        '\\PithFront\\PithPackSwal\\SwalResourceRoute'],
        ['route',       'GET',           '/resources/vendor/library/toastr/{filepath:.+}',            '\\PithFront\\PithPackToastr\\ToastrResourceRoute'],
        ['route',       ['GET', 'POST'], '/sign-out',                                                 '\\Pith\\DemoApp\\DemoAppPagesPack\\SignOutRoute'],
        ['route',       ['GET', 'POST'], '/user-page-1',                                              '\\Pith\\DemoApp\\DemoAppPagesPack\\UserPage1Route'],
        ['route',       ['GET', 'POST'], '/user-page-2',                                              '\\Pith\\DemoApp\\DemoAppPagesPack\\UserPage2Route'],

    ];
}