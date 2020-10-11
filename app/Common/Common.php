<?php

function getImageUrl($image)
{
    return isset($image) ?
        Storage::disk('public')->url($image)
        : url(asset('backend/img/no-image.png'));
}

function cus_date($date, $format = 'd-m-Y')
{
    return date_format($date, $format);
}

function getCurrentRoute()
{
    return Route::currentRouteName();
}

function getCurrentController()
{
    return class_basename(Route::current()->controller);
}

function getActiveClassByController($controller)
{
    return $controller == getCurrentController() ? 'active' : '';
}

function getActiveClassByRoute($route)
{
    return $route == getCurrentRoute() ? 'active' : '';
}

function getActiveClassByUrl($url)
{
    return Request::is($url) ? 'active' : '';
}
