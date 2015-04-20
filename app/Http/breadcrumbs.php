<?php

// Home
Breadcrumbs::register('home-manu', function($breadcrumbs)
{
    $breadcrumbs->push('Home','home-manu');
});

Breadcrumbs::register('customer', function($breadcrumbs)
{
    $breadcrumbs->push('Customer Info','customer/information');
});

Breadcrumbs::register('customer-information', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Customer Info','customer/information');
});

Breadcrumbs::register('customer-service-log', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Service Log', 'customer/service-log');
});

Breadcrumbs::register('customer-rental-space', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Customer Info', 'customer/rental-space');
});

Breadcrumbs::register('customer-vehicle-access', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Vehicle Access', 'customer/vehicle-access');
});

Breadcrumbs::register('customer-ware-house', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Ware House', 'customer/ware-house');
});

Breadcrumbs::register('customer-port-service', function($breadcrumbs)
{
    $breadcrumbs->parent('customer');
    $breadcrumbs->push('Port Service', 'customer/port-service');
});