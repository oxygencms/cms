<?php

namespace App\Interfaces;

interface RouteNamePrefixes
{
    /**
     * @return array
     */
    public function getRouteParams(): array;
}