<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'planemodel_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planemodel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planemodel/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wcs_coav_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/flight/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/flight/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'terrain_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/terrain/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'terrain_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/terrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_terrain_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'app.admin.terrain',    '_sonata_name' => 'admin_wcs_coav_terrain_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/terrain/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_flight_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'app.admin.flight',    '_sonata_name' => 'admin_wcs_coav_flight_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/flight/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_planemodel_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'app.admin.planemodel',    '_sonata_name' => 'admin_wcs_coav_planemodel_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/planemodel/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_reservation_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'app.admin.reservation',    '_sonata_name' => 'admin_wcs_coav_reservation_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/reservation/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_wcs_coav_user_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'app.admin.user',    '_sonata_name' => 'admin_wcs_coav_user_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/wcs/coav/user/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
