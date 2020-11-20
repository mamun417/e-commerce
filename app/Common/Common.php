<?php

function getImageUrl($image_path)
{
    return isset($image_path)
        ? Storage::disk('public')->url($image_path)
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

function slug($text) {
    return preg_replace('/\s+/u', '-', strtolower(trim($text)));
}

function numberToWords($number) {
    $inWords = new NumberFormatter('en', NumberFormatter::SPELLOUT);
    return $inWords->format($number);
}
