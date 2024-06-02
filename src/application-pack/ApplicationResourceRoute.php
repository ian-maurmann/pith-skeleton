<?php

/**
 * Application Resource Route
 * --------------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpUnused                             - Ignore that the class is unused.
 */


declare(strict_types=1);

namespace MyOrganizationNamespace\MyApplicationNamespace;

use Pith\Workflow\PithRoute;

/**
 * Class ApplicationResourceRoute
 */
class ApplicationResourceRoute extends PithRoute
{
    public string $pack            = 'MyOrganizationNamespace\\MyApplicationNamespace\\ApplicationPack';
    public string $route_type      = 'resource-folder';
    public string $access_level    = 'world';
    public string $resource_folder = '[^route_folder]/resources/';
    public string $cache_level     = 'Cache-Control: public, max-age=31536000, immutable, stale-while-revalidate=604800, stale-if-error=1209600';
}
