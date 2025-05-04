<?php

use Pecee\SimpleRouter\SimpleRouter;
use sistema\Nucleo\Helpers;

try {
    SimpleRouter::setDefaultNamespace('sistema\Controlador');
    SimpleRouter::get(URL_SITE, 'SiteControlador@index');
    SimpleRouter::get(URL_SITE.'/sobre', 'SiteControlador@sobre');
    SimpleRouter::get(URL_SITE.'/404', 'SiteControlador@erro404');
    SimpleRouter::start();
} catch (\Pecee\SimpleRouter\Exceptions\NotFoundHttpException $excep) {
    Helpers::redirecionar('404');
}
