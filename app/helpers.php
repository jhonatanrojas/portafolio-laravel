<?php


function setActive($RouteName){

    return request()->routeIs($RouteName) ? ' active': '';

}